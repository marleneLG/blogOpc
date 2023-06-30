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
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);

        $comment = new ModelComment();
        $allComments = $comment->getCommentsIsApprovedFromPostId($postId);
        echo $this->twig->render('comment.twig', ['post' => $post, 'comments' => $allComments]);
    }

    public function addComment($postId)
    {
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        echo $this->twig->render('createComment.twig',['post' => $post]);
    }

    public function create($postId)
    {
        if (isset($_POST['message']) && trim($_POST['message']) != '' && strlen($_POST['message']) < 300) {
            $message = htmlspecialchars($_POST['message']);
            // $modelUser = new ModelUser();
            $modelPost = new ModelPost();
            // $userId = $modelUser->getUserByEmail($_SESSION['logged_user'])['id'];
            $postId = $modelPost->getPostById($postId);
            $commentContent = [
                'message' => $message,
                'created_at' => $this->datetime,
                // 'users_id' => $userId,
                'posts_id' => $postId
            ];

            $comment = new ModelComment();
            $comment->createcommentModel($commentContent);

            echo $this->twig->render('retour au post commenté.twig');
        }
    }
}
