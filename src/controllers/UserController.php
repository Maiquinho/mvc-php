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

            } 
        } 

        $this->redirect('/new');
    }

    public function edit($args){
        $user = User::select()->where('id', $args['id'])->first();

        $this->render('edit', [
            'user' => $user
        ]);
    }

    public function editAction($args){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            User::update()
                ->set('name', $name)
                ->set('email', $email)
                ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        }


        $this->render('/user/'. $args['id'] .'/edit');
    }


    public function delete($args){
        User::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }

}