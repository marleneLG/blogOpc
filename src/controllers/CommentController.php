<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelComment;
use Marle\BlogOpc\models\ModelPost;

class CommentController
{
    private $twig;

    function __construct($twig)
    {
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

    public function addComment()
    {
        echo $this->twig->render('createComment.twig');
    }

    public function create()
    {
    }
}
