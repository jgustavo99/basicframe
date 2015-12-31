<?php

/**
 * BasicFrame - Framework Basic PHP
 * Rotas da aplicação com Slim - routes.php
 */

$app->get('/', function(){
	echo 'Ola Mundo!';
});

$app->get('/users', 'App\Controllers\UserController:index');
//$app->get('/users/create', 'App\Controllers\UserController:create');
//$app->post('/users/create', 'App\Controllers\UserController:store');
//$app->get('/users/edit/{id}', 'App\Controllers\UserController:edit');
//$app->post('/users/edit', 'App\Controllers\UserController:update');
//$app->post('/users/delete/{id}', 'App\Controllers\UserController:destroy');