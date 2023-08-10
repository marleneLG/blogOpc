<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use Marle\BlogOpc\controllers\HomeController;
use Marle\BlogOpc\controllers\PostController;
use Marle\BlogOpc\controllers\UserController;
use Marle\BlogOpc\controllers\CommentController;
use Marle\BlogOpc\controllers\FormController;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, [
    'cache' => 'cache',
    'debug' => true,
    'auto_reload' => true
]);
$twig->addGlobal('session', $_SESSION);

/**
 * index.php?controller=PostController&amp;action=post
 * http://localhost/index.php?action=post-create
 */
/*
if (isset($_GET['action'])) {
    if ($_GET['action'] === 'post') {
        $postController = new PostController($twig);
        $postController->index();
    }
    if ($_GET['action'] === 'connect') {
        $userController = new UserController($twig);
        $userController->index();
    }
    if ($_GET['action'] === 'login') {
        $userController = new UserController($twig);
        $userController->login();
    }
    if ($_GET['action'] === 'disconnect') {
        $userController = new UserController($twig);
        $userController->disconnect();
    }
    if ($_GET['action'] === 'management') {
        $userController = new UserController($twig);
        $userController->management();
    }
    // sinon ?? switch avec default
} else {
    $homeController = new HomeController($twig);
    $homeController->index();
}
*/
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'posts':
            $postController = new PostController($twig);
            $postController->index();
            break;
        case 'displayFormPost':
            $postController = new PostController($twig);
            $postController->displayFormPost();
            break;
        case 'connect':
            $userController = new UserController($twig);
            $userController->index();
            break;
        case 'login':
            $userController = new UserController($twig);
            $userController->login();
            break;
        case 'disconnect':
            $userController = new UserController($twig);
            $userController->disconnect();
            break;
        case 'management':
            $userController = new UserController($twig);
            $userController->management();
            break;
        case 'validationComment':
            $commentController = new CommentController($twig);
            $commentController->updateComment($_GET['commentId']);
            break;
        case 'createPost':
            $postController = new PostController($twig);
            $postController->createPost();
            break;
        case 'deletePost':
            $postController = new PostController($twig);
            $postController->deletePost($_GET['postId']);
            break;
        case 'displayUpdatePost':
            $postController = new PostController($twig);
            $postController->displayUpdatePost($_GET['postId']);
            break;
        case 'displayCommentForm':
            $commentController = new CommentController($twig);
            $commentController->displayCommentForm($_GET['id']);
            break;
        case 'post':
            $commentController = new CommentController($twig);
            $commentController->index($_GET['id']);
            break;
        case 'createComment':
            $commentController = new CommentController($twig);
            $commentController->createComment();
            break;
        case 'deleteComment':
            $commentController = new CommentController($twig);
            $commentController->deleteComment($_GET['commentId']);
            break;
        case 'sendForm':
            $formController = new FormController($twig);
            $formController->sendForm();
            break;
        default:
            $homeController = new HomeController($twig);
            $homeController->index();
            break;
    }
} else {
    $homeController = new HomeController($twig);
    $homeController->index();
}
