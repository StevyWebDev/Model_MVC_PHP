<?php

use App\Application;

date_default_timezone_set('Europe/Paris');
require 'vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Application::process();
