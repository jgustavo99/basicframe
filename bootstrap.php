<?php

/**
 * BasicFrame - Framework Basic PHP
 * Arquivo de inicialização - bootstrap.php
 * @author João Gustavo Balestrin dos Santos <joaogustavo.b@hotmail.com>
 * @copyright (c) 2015
 * @package BasicFrame
 */

// Diretório base da aplicação
define('BASE_PATH', dirname(__FILE__));

// Inclui o arquivo de configurações
require 'core/config.php';

// Inicialização do Eloquent ORM
$container = new \Illuminate\Container\Container;
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$conn = $connFactory->make(getConfig('eloquent'));
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);

// Instancia uma aplicação Slim e envia como parametro o array config das settings
$app = new \Slim\App(getConfig('slim'));

// Inclui o arquivo das Rotas
require 'app/routes.php';

// Executar aplicação
$app->run();