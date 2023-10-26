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


    function __construct(mixed $twig)
    {
        $this->datetime = (new \DateTime('now'))->format('d/m/Y H:i:s');
        $this->twig = $twig;
    }

    public function index(): void
    {
        $post = new ModelPost();
        $allPosts = $post->getPosts();
        echo $this->twig->render('posts.twig', ['posts' => $allPosts]);
    }

    public function isAuthorized(): bool
    {
        $userInstance = new UserController($this->twig);
        return $userInstance->hasRole();
    }

    public function displayFormPost(): void
    {
        if ($this->isAuthorized() === false) return;

        //dirige vers formulaire d'ajout d'un post
        echo $this->twig->render('createPost.twig');
    }

    public function validForm(): void
    {
        if ($this->isAuthorized() === false) return;

        $postTitle = $_POST['title'];
        $postMessage = $_POST['message'];

        $isTitleValid = isset($postTitle) && trim($postTitle) != '' && strlen($postTitle) < self::MAX_POST_TITLE_LENGTH;
        $isMessageValid = isset($postMessage) && trim($postMessage) != '' && strlen($postMessage) < self::MAX_POST_CONTENT_LENGTH;

        if (!$isTitleValid || !$isMessageValid) {
            echo $this->twig->render('createPost.twig', ['error' => 'Merci de remplir le formulaire']);
        }
    }

    public function createPost(): void
    {
        if ($this->isAuthorized() === false) return;

        $this->validForm();

        $postTitle = $_POST['title'];
        $postMessage = $_POST['message'];

        $title = htmlspecialchars($postTitle);
        $message = htmlspecialchars($postMessage);
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
    public function displayUpdatePost(int $postId): void
    {
        if ($this->isAuthorized() === false) return;

        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        echo $this->twig->render('editPost.twig', ['post' => $post]);
    }

    public function editPost(): void
    {
        if ($this->isAuthorized() === false) return;

        $this->validForm();

        $postTitle = $_POST['title'];
        $postMessage = $_POST['message'];
        $postId = $_POST['postId'];
        $title = htmlspecialchars($postTitle);
        $message = htmlspecialchars($postMessage);

        $postContent = [
            'id' => $postId,
            'title' => $title,
            'message' => $message,
            'updated_at' => $this->datetime,
        ];

        $postInstance = new ModelPost();
        $postInstance->updatePostModel($postContent);
        $this->index();
    }

    public function deletePost(int $postId): void
    {
        if ($this->isAuthorized() === false) return;

        $postInstance = new ModelPost();
        $allPosts = $postInstance->getPosts();
        $this->twig->addGlobal('session', $_SESSION);

        if ($postInstance->deletePostModel($postId) === true) {
            echo $this->twig->render('posts.twig', ['posts' => $allPosts, 'validMessage' => 'Post supprimé avec succès']);
        } else {
            echo $this->twig->render('posts.twig', ['posts' => $allPosts, 'errorMessage' => 'Post non supprimé']);
        }
    }
}
