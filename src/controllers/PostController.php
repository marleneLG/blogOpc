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

    public function displayFormPost()
    {
        //dirige vers formulaire d'ajout d'un post
        echo $this->twig->render('createPost.twig');
    }

    public function validForm()
    {
        $isTitleValid = isset($_POST['title']) && trim($_POST['title']) != '' && strlen($_POST['title']) < self::MAX_POST_TITLE_LENGTH;
        $isMessageValid = isset($_POST['message']) && trim($_POST['message']) != '' && strlen($_POST['message']) < self::MAX_POST_CONTENT_LENGTH;

        if (!$isTitleValid || !$isMessageValid) {
            echo $this->twig->render('createPost.twig', ['error' => 'Merci de remplir le formulaire']);
        }
    }

    // public function postContent($postContent) {
    //     $title = htmlspecialchars($_POST['title']);
    //     $message = htmlspecialchars($_POST['message']);
    //     $modelUser = new ModelUser();
    //     $userId = $modelUser->getUserByEmail($_SESSION['logged_user'])['id'];

    //     //Todo si $userId null ??
    //     $postContent = [
    //         'title' => $title,
    //         'message' => $message,
    //         'created_at' => $this->datetime,
    //         'updated_at' => $this->datetime,
    //         'users_id' => $userId
    //     ];
    // }

    public function createPost()
    {
        $this->validForm();

        $title = htmlspecialchars($_POST['title']);
        $message = htmlspecialchars($_POST['message']);
        $modelUser = new ModelUser();
        $userId = $modelUser->getUserByEmail($_SESSION['logged_user'])['id'];

        //Todo si $userId null ??
        $postContent = [
            'title' => $title,
            'message' => $message,
            'created_at' => $this->datetime,
            'updated_at' => $this->datetime,
            'users_id' => $userId
        ];

        $post = new ModelPost();
        $post->createPostModel($postContent);

        $this->index();
    }

    //récupérer le posts et renvoyer vers formulaire de création
    public function displayUpdatePost($postId)
    {
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        echo $this->twig->render('editPost.twig', ['post' => $post]);
    }

    public function editPost()
    {
        $this->validForm();

        $title = htmlspecialchars($_POST['title']);
        $message = htmlspecialchars($_POST['message']);

        //Todo si $userId null ??
        $postContent = [
            'id' => $_POST['postId'],
            'title' => $title,
            'message' => $message,
            'updated_at' => $this->datetime,
        ];

        $postInstance = new ModelPost();
        $postInstance->updatePostModel($postContent);
        $this->index();
    }

    public function deletePost($postId)
    {
        $modelUser = new ModelUser();
        $userId = $modelUser->getUserByEmail($_SESSION['logged_user'])['id'];
        if (!isset($userId)) {
            $errorMessage = 'Vous ne pouvez pas supprimer ce post car vous n\'avez pas les droits';
            echo $this->twig->render('home.twig', ['errorMessage' => $errorMessage]);
        }
        $postInstance = new ModelPost();
        $allPosts = $postInstance->getPosts();
        $post = $postInstance->getPostById($postId);
        $postInstance->deletePostModel($postId);
        var_dump($postId);

        echo $this->twig->render('posts.twig', ['posts' => $allPosts]);
    }
}
