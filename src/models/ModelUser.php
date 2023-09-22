<?php

namespace Marle\BlogOpc\models;

require_once('src/model.php');

use SPDO;

class ModelUser
{
    public function createUserModel($userContent)
    {

        // Ecriture de la requête
        $sqlQuery = 'INSERT INTO users(username, password, email, is_admin, created_at, updated_at, is_validated) VALUES (:username, :password, :email, :is_admin, :created_at, :updated_at, :is_validated)';

        // Préparation insertion en base
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);

        // Exécution
        $isInserted = $insertUser->execute($userContent);

        if ($isInserted === false) {
            var_dump('oops', $insertUser->errorCode(), $insertUser->errorInfo());
        }
    }

    public function validationUserModel($userId)
    {
        $sqlQuery = 'UPDATE users SET is_validated=1 WHERE id = :id';
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertUser->execute([':id' => $userId]);
        if ($isInserted === false) {
            var_dump('oops', $insertUser->errorCode(), $insertUser->errorInfo());
        }
    }

    public function validationUserAdminModel($userId)
    {
        $sqlQuery = 'UPDATE users SET is_admin=1 WHERE id = :id';
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertUser->execute([':id' => $userId]);
        if ($isInserted === false) {
            var_dump('oops', $insertUser->errorCode(), $insertUser->errorInfo());
        }
    }

    public function validationUserSimpleModel($userId)
    {
        $sqlQuery = 'UPDATE users SET is_admin=0 WHERE id = :id';
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertUser->execute([':id' => $userId]);
        if ($isInserted === false) {
            var_dump('oops', $insertUser->errorCode(), $insertUser->errorInfo());
        }
    }

    public function getUsers()
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM users');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getUserByEmail($email)
    {
        $statement = SPDO::getInstance()->prepare('SELECT id, password, is_validated FROM users WHERE email = :email');
        $statement->execute([':email' => $email]);
        return $statement->fetch();
    }
}
