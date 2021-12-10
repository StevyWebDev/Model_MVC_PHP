<?php

namespace Model;

use App\Database;

abstract class Model
{
    protected Database $pdo;

    public function __construct() {
        $this->pdo = \App\Database::pdo();
    }
}