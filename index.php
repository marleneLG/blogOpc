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
        case 'displayFormUser':
            $userController = new UserController($twig);
            $userController->displayFormUser();
            break;
        case 'createUser':
            $userController = new UserController($twig);
            $userController->createUser();
            break;
        case 'validationUser':
            $userController = new UserController($twig);
            $userController->updateUser($_GET['userId']);
            break;
        case 'validationUserAdmin':
            $userController = new UserController($twig);
            $userController->updateUserAdmin($_GET['userId']);
            break;
        case 'validationUserSimple':
            $userController = new UserController($twig);
            $userController->updateUserSimple($_GET['userId']);
            break;
        case 'login':
            $userController = new UserController($twig);
            $userController->login();
            break;
        case 'disconnect':
            $userController = new UserController($twig);
            $userController->disconnect();
            break;
        case 'managementComment':
            $commentController = new commentController($twig);
            $commentController->displayManagementComment();
            break;
        case 'validationComment':
            $commentController = new CommentController($twig);
            if (!empty($_GET['commentId'])) {
                $commentController->updateComment($_GET['commentId']);
            }
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
        case 'editPost':
            $postController = new PostController($twig);
            $postController->editPost();
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
