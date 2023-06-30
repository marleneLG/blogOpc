<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelPost;
use Marle\BlogOpc\models\ModelUser;

class PostController
{
    private $twig;
    private $datetime;

    function __construct($twig)
    {
        $this->datetime = new \DateTime('now');
        $this->twig = $twig;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $post = new ModelPost();
        $allPosts = $post->getPosts();
        echo $this->twig->render('post.twig', ['posts' => $allPosts]);
    }

    public function addPost()
    {
        //dirige vers formulaire d'ajout d'un post
        echo $this->twig->render('createPost.twig');
    }

    public function createPost()
    {
        if (isset($_POST['title']) && isset($_POST['message'])) {
            // var_dump('coucou');
            $title = htmlspecialchars($_POST['title']);
            $message = htmlspecialchars($_POST['message']);
            $modelUser = new ModelUser();
            $userId = $modelUser->getUserByEmail($_SESSION['logged_user']);
            // var_dump($userId);
            $postContent = [
                'title' => $title,
                'message' => $message,
                'created_at' => $this->datetime,
                'users_id' => $userId
            ];

            $post = new ModelPost();
            $post->createPostModel($postContent);

            echo $this->twig->render('post.twig');
        }
    }

    public function edit($id)
    {
        //
    }
}
