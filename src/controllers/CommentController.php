<?php

namespace Marle\BlogOpc\controllers;

session_start();

use Marle\BlogOpc\models\ModelComment;
use Marle\BlogOpc\models\ModelPost;
use Marle\BlogOpc\models\ModelUser;

class CommentController
{
    private $twig;
    private $datetime;
    private const MAX_MESSAGE_SIZE = 300;

    function __construct($twig)
    {
        $this->datetime = (new \DateTime('now'))->format('Y-m-d H:i:s');
        $this->twig = $twig;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index($postId)
    {
        // $postInstance = new ModelPost();
        // $post = $postInstance->getPostById($postId);

        $comment = new ModelComment();
        $allComments = $comment->getCommentsIsApprovedFromPostId($postId);
        $postContent = $this->getPostById($postId);
        echo $this->twig->render('post.twig', ['comments' => $allComments, 'post' => $postContent]);

        // echo $this->twig->render('post.twig', ['post' => $post, 'comments' => $allComments]);
    }

    public function displayCommentForm($postId, $errorMessage = null)
    {
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        echo $this->twig->render('createComment.twig', [
            'postId' => $post['id'],
            'errorMessage' => $errorMessage
        ]);
    }

    public function createComment()
    {
        $isValidComment = isset($_POST['message'])
            && trim($_POST['message']) != ''
            && strlen($_POST['message']) < self::MAX_MESSAGE_SIZE
            && isset($_POST['postId']);

        if (!$isValidComment) {
            $errorMessage = 'Champ mal rempli';
            $this->displayCommentForm($_POST['postId'], $errorMessage);
            return;
        };

        $postId = $_POST['postId'];
        $message = htmlspecialchars($_POST['message']);
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);

        if ($post === false) {
            $errorMessage = 'Pas de post associé existant';
            $this->displayCommentForm($_POST['postId'], $errorMessage);
            return;
        }

        $postIdFromDb = $post['id'];
        $commentContent = [
            'message' => $message,
            'created_at' => $this->datetime,
            'updated_at' => $this->datetime,
            'posts_id' => $postIdFromDb
        ];
        $comment = new ModelComment();
        $comment->createCommentModel($commentContent);

        echo $this->index($postIdFromDb);
    }

    public function updateComment($commentId)
    {
        $comment = new ModelComment();
        $allComments = $comment->getCommentsIsNotApproved();
        $comment->validationCommentModel($commentId);
        echo $this->twig->render('admin.twig', ['comments' => $allComments]);
    }

    public function deleteComment($commentId)
    {
        $modelUser = new ModelUser();
        $userId = $modelUser->getUserByEmail($_SESSION['logged_user'])['id'];
        var_dump($userId);
        if (!isset($userId)) {
            $errorMessage = 'Vous ne pouvez pas supprimer ce commentaire car vous n\'avez pas les droits';
            echo $this->twig->render('home.twig', $errorMessage);
        }
        $commentInstance = new ModelComment();
        $comment = $commentInstance->getCommentById($commentId);
        $allComments = $commentInstance->getCommentsIsNotApproved();
        $commentInstance->deleteCommentModel($commentId);

        echo $this->twig->render('admin.twig', ['comments' => $allComments, 'commentId' => $comment['id']]);
    }
    public function getPostById($postId)
    {
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        return $post;
    }
}
