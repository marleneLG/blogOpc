<?php
require __DIR__ . '/vendor/autoload.php';

use Marle\BlogOpc\controllers\HomeController;
use Marle\BlogOpc\controllers\PostController;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, [
    'cache' => 'cache',
    'debug' => true,
    'auto_reload' => true
]);

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'post') {
        $postController = new PostController($twig);
        $postController->index();
    } else {
        echo 'Erreur';
    }
} else {
    $homeController = new HomeController($twig);
    $homeController->index();
}
