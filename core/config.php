<?php

/**
 * BasicFrame - Framework Basic PHP
 * Configuração da aplicação - config.php
 * @author João Gustavo Balestrin dos Santos <joaogustavo.b@hotmail.com>
 * @copyright (c) 2015
 * @package BasicFrame
 */

// URL da aplicação (Com Barra no Final)
$url = 'http://localhost/basicframe/';

// Configurações da aplicação
$config = [
    'app' => [
        'url' => $url
    ],

    'slim' => [
        'settings' => [
            'displayErrorDetails' => true
        ]
    ],

    'eloquent' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'basicframe',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix'    => ''
    ]
];