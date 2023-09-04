<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelUser;
use Marle\BlogOpc\models\ModelComment;
use Marle\BlogOpc\controllers\HomeController;

class UserController
{
    private $twig;

    function __construct($twig)
    {
        $this->twig = $twig;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        echo $this->twig->render('connexion.twig');
    }

    public function hasRole()
    {
        //fonction qui vérifie si droit ou pas
        //si pas admin = error message 
        $isSessionSet = true;
        if (!isset($_SESSION['logged_user_by_email'])) $isSessionSet = false;

        if ($isSessionSet) {
            $modelUser = new ModelUser();
            $userId = $modelUser->getUserByEmail($_SESSION['logged_user_by_email'])['id'];
        }
        
        if (!$isSessionSet || !isset($userId)) {
            $homeInstance = new HomeController($this->twig);
            $homeInstance->index('Vous n\'avez pas les droits');
            return false;
        }
        return true;
    }

    public function login()
    {
        // vérifier les champs envoyés && non null/vide
        if (isset($_POST['email']) && isset($_POST['password'])) {
            // TODO vérification  / sécurisation de l'input
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            // connect à la db, récup des users
            $user = new ModelUser();
            $allUsers = $user->getUsers();
            // parcours des users
            $isFound = false;
            foreach ($allUsers as $currentUser) {
                // vérif si hash du mdp envoyé === hash en db
                $isPasswordvalid = password_verify($password, $currentUser['password']);
                if ($currentUser['email'] === $email && $isPasswordvalid) {
                    //on garde en mémoire l'utilisateur
                    $_SESSION['logged_user_by_email'] = $email;
                    // si oui, affichage de la page admin
                    echo $this->twig->render('home.twig');
                    $isFound = true;
                }
            }

            if (!$isFound) {
                echo $this->twig->render('connexion.twig');
            }
        }
    }

    public function disconnect()
    {
        unset($_SESSION['logged_user_by_email']);
        echo $this->twig->render('home.twig');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
}
