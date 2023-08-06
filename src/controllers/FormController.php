<?php

namespace Marle\BlogOpc\controllers;

class FormController
{
    private $twig;

    private const MAX_MESSAGE_LENGTH = 300;
    private const MAX_LENGTH = 50;

    function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function sendForm()
    {
        $isNameValid = isset($_POST['name']) && trim($_POST['name']) != '' && strlen($_POST['name']) < self::MAX_LENGTH;
        $isPhoneValid = isset($_POST['phone']) && trim($_POST['phone']) != '' && strlen($_POST['phone']) < self::MAX_LENGTH;
        $isEmailValid = isset($_POST['email']) && trim($_POST['email']) != '' && strlen($_POST['email']) < self::MAX_LENGTH;
        $isMessageValid = isset($_POST['message']) && trim($_POST['message']) != '' && strlen($_POST['message']) < self::MAX_MESSAGE_LENGTH;

        $nom = htmlspecialchars($_POST['name']); // required
        $email = htmlspecialchars($_POST['email']); // required
        $phone = htmlspecialchars($_POST['phone']); // not required
        $message = htmlspecialchars($_POST['message']); // required
        $errorMessage = "formulaire non valide";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        $email_to = "marlene.mlg53@gmail.com";
        $validMessage = 'Message bien envoyé';


        if (!$isNameValid || !$isPhoneValid || !$isEmailValid || !$isMessageValid) {
            echo $this->twig->render('home.twig', ['errorMessage' => $errorMessage]);
        }

        // if (!preg_match($email_exp, $email)) {
        //     $errorMessage .=
        //         'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
        // }

        // // Prend les caractères alphanumériques + le point et le tiret 6
        // $string_exp = "/^[A-Za-z0-9 .'-]+$/";

        // if (!preg_match($string_exp, $nom)) {
        //     $errorMessage .=
        //         'Le nom que vous avez entré ne semble pas être valide.<br />';
        // }

        // if (strlen($message) < 2) {
        //     $errorMessage .=
        //         'Le message que vous avez entré ne semble pas être valide.<br />';
        // }

        $email_message = "Détail.\n\n";
        $email_message .= "Nom: " . $nom . "\n";
        $email_message .= "Prenom: " . "\n";
        $email_message .= "Email: " . $email . "\n";
        $email_message .= "Telephone: " . $phone . "\n";
        $email_message .= "message: " . $message . "\n";

        // create email headers
        $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($email_to, $email_message, $headers);
        // $headers = "From:" . $nom . " " . $email;
        // if (mail($email_to, $email_message, $headers)) {
        //     var_dump('mail envoyé');
        // }

        echo $this->twig->render('home.twig', ['validMessage' => $validMessage]);
    }
}
