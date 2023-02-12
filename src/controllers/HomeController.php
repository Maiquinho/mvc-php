<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $title = 'Página Home';
        $this->render('home', ['title' => $title]);
    }

}