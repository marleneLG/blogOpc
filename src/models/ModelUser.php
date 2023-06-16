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
        $users = $statement->fetchAll();
        return $users;
    }

    public function getUserByEmail()
    {
        $statement = SPDO::getInstance()->query('SELECT id FROM users');
        // $statement->prepare('SELECT id FROM users');
        $statement->execute();
        $user = $statement->fetch();
        return $user;
    }
}
