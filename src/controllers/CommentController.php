<?php

namespace Marle\BlogOpc\controllers;

// session_start();

use Marle\BlogOpc\models\ModelComment;
use Marle\BlogOpc\models\ModelPost;
use Marle\BlogOpc\models\ModelUser;
use Marle\BlogOpc\controllers\UserController;

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
        $comment = new ModelComment();
        $allComments = $comment->getCommentsIsApprovedFromPostId($postId);
        $postContent = $this->getPostById($postId);
        $user = new ModelUser();
        $allUsers = $user->getUsers();
        echo $this->twig->render('post.twig', ['comments' => $allComments, 'post' => $postContent, 'users' => $allUsers]);
    }

    public function isAuthorized()
    {
        $userInstance = new UserController($this->twig);
        return $userInstance->hasRole();
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
        if (isset($_POST['message'])) {
            $postMessage = $_POST['message'];
        }
        $postId = $_POST['postId'];

        $isValidComment = isset($postMessage)
            && trim($postMessage) != ''
            && strlen($postMessage) < self::MAX_MESSAGE_SIZE
            && isset($postId);

        if (!$isValidComment) {
            $errorMessage = 'Champ mal rempli';
            $this->displayCommentForm($postId, $errorMessage);
            return;
        };

        $message = htmlspecialchars($postMessage);
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);

        if ($post === false) {
            $errorMessage = 'Pas de post associé existant';
            $this->displayCommentForm($postId, $errorMessage);
            return;
        }

        $postIdFromDb = $post['id'];
        $commentContent = [
            'message' => $message,
            'created_at' => $this->datetime,
            'updated_at' => $this->datetime,
            'post_id' => $postIdFromDb
        ];
        $comment = new ModelComment();
        $comment->createCommentModel($commentContent);

        echo $this->index($postIdFromDb);
    }

    public function displayManagementComment($errorMessage = null, $validMessage = null)
    {
        if ($this->isAuthorized() === false) return;

        $comment = new ModelComment();
        $user = new ModelUser();
        $allUsers = $user->getUsers();
        $allComments = $comment->getCommentsIsNotApproved();
        $numberComments = count($allComments);
        echo $this->twig->render('admin.twig', ['comments' => $allComments, 'users' => $allUsers, 'number' => $numberComments, 'validMessage' => $validMessage, 'errorMessage' => $errorMessage]);
    }

    public function updateComment($commentId)
    {
        if ($this->isAuthorized() === false) return;

        $comment = new ModelComment();
        $comment->validationCommentModel($commentId);
        $this->displayManagementComment();
    }

    public function deleteComment($commentId)
    {
        if ($this->isAuthorized() === false) return;

        $commentInstance = new ModelComment();
        $errorMessage = 'Commentaire non supprimé';
        $validMessage = 'Commentaire supprimé avec succès';
        if ($commentInstance->deleteCommentModel($commentId) == true) {
            $this->displayManagementComment($validMessage);
        } else {
            $this->displayManagementComment($errorMessage);
        }
    }
    public function getPostById($postId)
    {
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        return $post;
    }
}
