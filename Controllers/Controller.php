<?php

namespace Controller;

abstract class Controller
{
    protected function render($path, $varibales = []) {
        extract($varibales);
        ob_start();
        require 'Views/' . $path . '.html.php';
        $content = ob_get_clean();

        require 'Views/layout.html.php';
        exit;
    }

    protected function renderAjax($path, $varibales = []) {
        extract($varibales);
        ob_start();
        require 'Views/' . $path . '.html.php';
        exit;
    }

    public function redirect($controller, $task, $param = null) {
        if($param) {
            header('location: index.php?controller='.$controller.'&task='.$task.'&param='.$param);
        }
        else {
            header('location: index.php?controller='.$controller.'&task='.$task);
        }
    }

    public function redirectToRoot() {
        header('location: index.php');
        exit();
    }
}