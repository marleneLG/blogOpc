<?php

namespace Marle\BlogOpc\models;

require_once('src/model.php');

use SPDO;

class ModelUser
{
    public function createUserModel(array $userContent): void
    {
        $sqlQuery = 'INSERT INTO users(username, password, email, is_admin, created_at, updated_at, is_validated) VALUES (:username, :password, :email, :is_admin, :created_at, :updated_at, :is_validated)';
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertUser->execute($userContent);

        if ($isInserted === false) {
            echo 'oops', $insertUser->errorCode(), $insertUser->errorInfo();
        }
    }

    public function validationUserModel(int $userId): void
    {
        $sqlQuery = 'UPDATE users SET is_validated=1 WHERE id = :id';
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertUser->execute([':id' => $userId]);
        if ($isInserted === false) {
            echo 'oops', $insertUser->errorCode(), $insertUser->errorInfo();
        }
    }

    public function validationUserAdminModel(int $userId): void
    {
        $sqlQuery = 'UPDATE users SET is_admin=1 WHERE id = :id';
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertUser->execute([':id' => $userId]);
        if ($isInserted === false) {
            echo 'oops', $insertUser->errorCode(), $insertUser->errorInfo();
        }
    }

    public function validationUserSimpleModel(int $userId): void
    {
        $sqlQuery = 'UPDATE users SET is_admin=0 WHERE id = :id';
        $insertUser = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertUser->execute([':id' => $userId]);
        if ($isInserted === false) {
            echo 'oops', $insertUser->errorCode(), $insertUser->errorInfo();
        }
    }

    public function getUsers(): array
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM users');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getUserByEmail(string $email): array
    {
        $statement = SPDO::getInstance()->prepare('SELECT id, password, is_validated, is_admin FROM users WHERE email = :email');
        $statement->execute([':email' => $email]);
        $result = $statement->fetch();

        return $result === false ? [] : $result;
    }
}
