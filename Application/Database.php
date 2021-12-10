<?php

namespace App;

class Database
{
    public static function pdo() {
        $pdo = new \PDO(
            $_ENV['DATABASE'],
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ]
        );
        return $pdo;
    }
}