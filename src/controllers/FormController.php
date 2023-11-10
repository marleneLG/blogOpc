<?php

namespace Marle\BlogOpc\controllers;

class FormController
{
    private $twig;

    private const MAX_MESSAGE_LENGTH = 300;
    private const MAX_LENGTH = 50;

    function __construct(mixed $twig)
    {
        $this->twig = $twig;
    }

    public function sendForm(): void
    {
        $postName = $_POST['name'];
        $postPhone = $_POST['phone'];
        $postEmail = $_POST['email'];
        $postMessage = $_POST['message'];

        $isNameValid = isset($postName) && trim($postName) != '' && strlen($postName) < self::MAX_LENGTH;
        $isPhoneValid = isset($postPhone) && trim($postPhone) != '' && strlen($postPhone) < self::MAX_LENGTH;
        $isEmailValid = isset($postEmail) && trim($postEmail) != '' && strlen($postEmail) < self::MAX_LENGTH;
        $isMessageValid = isset($postMessage) && trim($postMessage) != '' && strlen($postMessage) < self::MAX_MESSAGE_LENGTH;

        $name = htmlspecialchars($postName); // required
        $email = htmlspecialchars($postEmail); // required
        $phone = htmlspecialchars($postPhone); // not required
        $message = htmlspecialchars($postMessage); // required
        $errorMessages = [];
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        $email_to = "marlene.mlg53@gmail.com";
        $validMessage = 'Message bien envoyé';

        if (!preg_match($email_exp, $email) || !$isEmailValid) {
            $errorMessages[] = 'L\'adresse e-mail que vous avez entrée ne semble pas être valide';
        }

        // Prend les caractères alphanumériques + le point et le tiret 6
        $string_exp = "/^[A-Za-z0-9 .'-]+$/";

        if (!preg_match($string_exp, $name) || !$isNameValid) {
            $errorMessages[] = "Le nom entré est incorrect.";
        }

        if (strlen($message) < 2 || !$isMessageValid) {
            $errorMessages[] = "Le message entré est incorrect.";
        }

        if (!$isPhoneValid) {
            $errorMessages[] = "Le téléphone est incorrect.";
        }

        if (!empty($errorMessages)) {
            echo $this->twig->render('home.twig', ['errorMessages' => $errorMessages]);
            return;
        }

        $email_message = "Détail.\n\n";
        $email_message .= "Nom: " . $name . "\n";
        $email_message .= "Prenom: " . "\n";
        $email_message .= "Email: " . $email . "\n";
        $email_message .= "Telephone: " . $phone . "\n";
        $email_message .= "message: " . $message . "\n";

        $headers = "From:marlene.mlg53@gmail.com " . "\r\n";
        $subject = 'Formulaire de contact';

        if (mail($email_to, $subject, $email_message, $headers)) {
            echo $this->twig->render('home.twig', ['validMessage' => $validMessage]);
        } else {
            echo $this->twig->render('home.twig', ['errorMessages' => ['Mail non envoyé']]);
        }
    }
}
