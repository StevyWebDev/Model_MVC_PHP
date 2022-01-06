<?php

namespace App;

class Application
{
    public static function process()
    {
        $controllerName = "Home";
        $task = "index";
        $params = [];
        // $_GET['p'] = controller/methode/id/ba

        if(!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }

        if(!empty($_GET['task'])) {
            $task = $_GET['task'];
        }

        if(!empty($_GET['param'])) {
            $params = explode("/", $_GET['param']);
        }

        $controllerName = "\Controller\\" . $controllerName;
        $controller = new $controllerName();
        call_user_func_array([$controller, $task], $params);
    }
}