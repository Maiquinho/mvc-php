<?php
namespace src\controllers;

use \core\Controller;
use \src\models\User;

class HomeController extends Controller {

    public function index() {
        $users = User::select()->execute();

        $this->render('home', [
            'users' => $users
        ]);
    }

}