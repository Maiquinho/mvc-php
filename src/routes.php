<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/new', 'UserController@add');
$router->post('/new', 'UserController@addAction');

$router->get('/user/{id}/edit', 'UserController@edit');
$router->get('/user/{id}/delete', 'UserController@delete');