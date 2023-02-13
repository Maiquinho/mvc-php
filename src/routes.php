<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/new', 'UserController@add');
$router->post('/new', 'UserController@addAction');