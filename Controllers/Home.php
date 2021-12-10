<?php

namespace Controller;

class Home extends Controller
{
    public function index() {
        return $this->render('home/index', [
            'title' => 'Home'
        ]);
    }
}