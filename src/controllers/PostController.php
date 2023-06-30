<?php

namespace Marle\BlogOpc\controllers;

session_start();

use Marle\BlogOpc\models\ModelPost;
use Marle\BlogOpc\models\ModelUser;

class PostController
{
    private $twig;
    private $datetime;
    const MAX_POST_CONTENT_LENGTH = 20000;
    const MAX_POST_TITLE_LENGTH = 45;


    function __construct($twig)
    {
        $this->datetime = (new \DateTime('now'))->format('Y-m-d H:i:s');
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
        echo $this->twig->render('posts.twig', ['posts' => $allPosts]);
    }

    public function addPost()
    {
        //dirige vers formulaire d'ajout d'un post
        echo $this->twig->render('createPost.twig');
    }

    public function createPost()
    {
        $isTitleValid = isset($_POST['title']) && trim($_POST['title']) != '' && strlen($_POST['title']) < self::MAX_POST_TITLE_LENGTH;
        $isMessageValid = isset($_POST['message']) && trim($_POST['message']) != '' && strlen($_POST['message']) < self::MAX_POST_CONTENT_LENGTH;

        if (!$isTitleValid || !$isMessageValid) {
            echo $this->twig->render('createPost.twig', ['error' => 'Merci de remplir le formulaire']);
        }

        $title = htmlspecialchars($_POST['title']);
        $message = htmlspecialchars($_POST['message']);
        $modelUser = new ModelUser();
        $userId = $modelUser->getUserByEmail($_SESSION['logged_user'])['id'];
        // var_dump($userId);
        // si $userId null ??
        $postContent = [
            'title' => $title,
            'message' => $message,
            'created_at' => $this->datetime,
            'updated_at' => $this->datetime,
            'users_id' => $userId
        ];

        $post = new ModelPost();
        $post->createPostModel($postContent);

        echo $this->twig->render('posts.twig');
    }

    public function edit($id)
    {
        //
    }
}
