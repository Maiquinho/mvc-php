<?php
namespace src\controllers;

use \core\Controller;
use \src\models\User;

class UserController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function addAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            $data = User::select()->where('email', $email)->execute();

            if(count($data) === 0){

                User::insert([
                    'name' => $name,
                    'email' => $email
                ])->execute();

                echo 'inseriu';
                exit;

                $this->redirect('/');
            } 
        } 

        $this->redirect('/new');
    }

}