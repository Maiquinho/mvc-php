<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        
        $name = 'Michael';
        $age = 21;
        $posts = [
            ['title' => 'Título de teste 1', 'body' => 'corpo de teste 1'],
            ['title' => 'Título de teste 2', 'body' => 'corpo de teste 2'],
            ['title' => 'Título de teste 3', 'body' => 'corpo de teste 3'],
            ['title' => 'Título de teste 4', 'body' => 'corpo de teste 4'],
            ['title' => 'Título de teste 5', 'body' => 'corpo de teste 5'],
            ['title' => 'Título de teste 6', 'body' => 'corpo de teste 6'],
        ];

        $this->render('home', [
            'name' => $name,
            'age' => $age,
            'posts' => $posts,
        ]);
    }

}