<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelUser;

class HomeController
{
    private $twig;


    function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function index(string $errorMessage = null): void
    {
        $user = new ModelUser();
        $allUsers = $user->getUsers();
        echo $this->twig->render('home.twig', [$errorMessage, 'users' => $allUsers]);
    }
}
