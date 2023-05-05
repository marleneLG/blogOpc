<?php
require __DIR__ . '/vendor/autoload.php';

use Marle\BlogOpc\controllers\HomeController;
use Marle\BlogOpc\controllers\PostController;
use \Twig_Loader_Filesystem;
use \Twig_Environment;

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
    'cache' => 'cache',
    'debug' => true,
    'auto_reload' => true
]);

//controller
$postController = new PostController($twig);
$postController->index();


// $homeController = new HomeController($twig);
// $homeController->index();
