<?php

namespace Marle\BlogOpc\models;
// use Marle\BlogOpc\src\model\SPDO;

require_once('src/model.php');

use SPDO;

class ModelUser
{
    public function getUsers()
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM users');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getUserByEmail($email)
    {
        $statement = SPDO::getInstance()->prepare('SELECT id FROM users WHERE email = :email');
        $statement->execute([':email' => $email]);
        return $statement->fetch();
    }
}
