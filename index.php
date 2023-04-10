<?php
require __DIR__ . '/vendor/autoload.php';

use Marle\BlogOpc\controllers\PostController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, [
    'cache' => 'cache',
    'debug' => true,
    'auto_reload' => true
]);

//controller
$postController = new PostController($twig);
$postController->index();
