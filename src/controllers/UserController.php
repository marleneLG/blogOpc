<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelUser;
use Marle\BlogOpc\models\ModelComment;
use Marle\BlogOpc\controllers\HomeController;

class UserController
{
    private $twig;
    private $datetime;

    function __construct($twig)
    {
        $this->twig = $twig;
        $this->datetime = (new \DateTime('now'))->format('Y-m-d H:i:s');
    }

    public function index()
    {
        echo $this->twig->render('connexion.twig');
    }

    public function createUser()
    {
        if ($this->hasRole() === false) return;

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        $email = htmlspecialchars($_POST['email']);
        $isAdmin = 0;
        $isValidated = 0;

        $userContent = [
            'username' => $username,
            'password' => $passwordHashed,
            'email' => $email,
            'is_admin' => $isAdmin,
            'created_at' => $this->datetime,
            'updated_at' => $this->datetime,
            'is_validated' => $isValidated,
        ];

        $user = new ModelUser();
        $user->createUserModel($userContent);

        $this->index();
    }

    public function updateUserAdmin($userId)
    {
        if ($this->hasRole() === false) return;

        $user = new ModelUser();
        $user->validationUserAdminModel($userId);
        $allUsers = $user->getUsers();
        $commentInstance = new ModelComment();
        $allComments = $commentInstance->getCommentsIsNotApproved();
        echo $this->twig->render('admin.twig', ['comments' => $allComments, 'users' => $allUsers]);
    }

    public function updateUserSimple($userId)
    {
        if ($this->hasRole() === false) return;

        $user = new ModelUser();
        $user->validationUserSimpleModel($userId);
        $allUsers = $user->getUsers();
        $commentInstance = new ModelComment();
        $allComments = $commentInstance->getCommentsIsNotApproved();
        echo $this->twig->render('admin.twig', ['comments' => $allComments, 'users' => $allUsers]);
    }

    public function updateUser($userId)
    {
        if ($this->hasRole() === false) return;

        $user = new ModelUser();
        $user->validationUserModel($userId);
        $allUsers = $user->getUsers();
        $commentInstance = new ModelComment();
        $allComments = $commentInstance->getCommentsIsNotApproved();
        echo $this->twig->render('admin.twig', ['comments' => $allComments, 'users' => $allUsers]);
    }

    public function displayFormUser()
    {
        //dirige vers formulaire d'ajout d'un user
        echo $this->twig->render('createUser.twig');
    }

    public function displayManagementUser()
    {
        if ($this->hasRole() === false) return;

        $user = new ModelUser();
        $allUsers = $user->getUsers();
        echo $this->twig->render('admin.twig', ['users' => $allUsers]);
    }
    public function hasRole()
    {
        //fonction qui vérifie si droit ou pas
        //si pas admin = error message 
        $isSessionSet = true;
        if (!isset($_SESSION['logged_user_email'])) $isSessionSet = false;

        if ($isSessionSet) {
            $modelUser = new ModelUser();
            $userId = $modelUser->getUserByEmail($_SESSION['logged_user_email'])['id'];
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
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            // connect à la db, récup des users
            $user = new ModelUser();
            $userFound = $user->getUserByEmail($email);
            $isFound = false;

            //si userfound est dans la base de données et password valid
            if ($userFound != false) {
                $isPasswordValid = password_verify($password, $userFound['password']);
                if ($isPasswordValid) {
                    $_SESSION['logged_user_email'] = $email;
                    $_SESSION['is_validated'] = $userFound['is_validated'];
                    // si oui, affichage de la page admin
                    $isFound = true;
                    $this->twig->addGlobal('session', $_SESSION);
                }
            }

            if ($isFound) {
                echo $this->twig->render('home.twig');
            } else {
                echo $this->twig->render('connexion.twig');
            }
        }
    }

    public function disconnect()
    {
        unset($_SESSION['logged_user_email']);
        $this->twig->addGlobal('session', $_SESSION);
        echo $this->twig->render('home.twig');
    }
}
