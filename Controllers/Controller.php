<?php

namespace Controller;

abstract class Controller
{
    protected function render(string $path, array $varibales = []): void {
        extract($varibales);
        ob_start();
        require 'Views/' . $path . '.html.php';
        $content = ob_get_clean();

        require 'Views/layout.html.php';
        exit;
    }

    protected function renderAjax(string $path, array $variable = []):void {
        extract($variable);
        ob_start();
        require 'Views/' . $path . '.html.php';
        exit;
    }

    public function redirect(string $controller, string $task, $param = null): void {
        if($param) {
            header('location: index.php?controller='.$controller.'&task='.$task.'&param='.$param);
        }
        else {
            header('location: index.php?controller='.$controller.'&task='.$task);
        }
    }

    public function redirectToRoot(): void {
        header('location: index.php');
        exit();
    }
}