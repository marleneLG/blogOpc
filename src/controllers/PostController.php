<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelPost;
use Marle\BlogOpc\models\ModelUser;
use Marle\BlogOpc\controllers\UserController;

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

    public function index()
    {
        $post = new ModelPost();
        $allPosts = $post->getPosts();
        echo $this->twig->render('posts.twig', ['posts' => $allPosts]);
    }

    public function isAuthorized()
    {
        $userInstance = new UserController($this->twig);
        return $userInstance->hasRole();
    }

    public function displayFormPost()
    {
        if ($this->isAuthorized() === false) return;

        //dirige vers formulaire d'ajout d'un post
        echo $this->twig->render('createPost.twig');
    }

    public function validForm()
    {
        if ($this->isAuthorized() === false) return;

        $isTitleValid = isset($_POST['title']) && trim($_POST['title']) != '' && strlen($_POST['title']) < self::MAX_POST_TITLE_LENGTH;
        $isMessageValid = isset($_POST['message']) && trim($_POST['message']) != '' && strlen($_POST['message']) < self::MAX_POST_CONTENT_LENGTH;

        if (!$isTitleValid || !$isMessageValid) {
            echo $this->twig->render('createPost.twig', ['error' => 'Merci de remplir le formulaire']);
        }
    }

    public function createPost()
    {
        if ($this->isAuthorized() === false) return;

        $this->validForm();

        $title = htmlspecialchars($_POST['title']);
        $message = htmlspecialchars($_POST['message']);
        $modelUser = new ModelUser();
        $userId = $modelUser->getUserByEmail($_SESSION['logged_user_email'])['id'];

        $postContent = [
            'title' => $title,
            'message' => $message,
            'created_at' => $this->datetime,
            'updated_at' => $this->datetime,
            'user_id' => $userId
        ];

        $post = new ModelPost();
        $post->createPostModel($postContent);

        $this->index();
    }

    //récupérer le posts et renvoyer vers formulaire de création
    public function displayUpdatePost($postId)
    {
        if ($this->isAuthorized() === false) return;

        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        echo $this->twig->render('editPost.twig', ['post' => $post]);
    }

    public function editPost()
    {
        if ($this->isAuthorized() === false) return;

        $this->validForm();

        $title = htmlspecialchars($_POST['title']);
        $message = htmlspecialchars($_POST['message']);

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
        if ($this->isAuthorized() === false) return;

        $postInstance = new ModelPost();
        $allPosts = $postInstance->getPosts();
        $postInstance->deletePostModel($postId);

        echo $this->twig->render('posts.twig', ['posts' => $allPosts]);
    }
}
