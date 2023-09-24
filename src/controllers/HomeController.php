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

    public function index($errorMessage = null)
    {
        $user = new ModelUser();
        $allUsers = $user->getUsers();
        print_r($this->twig->render('home.twig', [$errorMessage, 'users' => $allUsers]));
    }
}
