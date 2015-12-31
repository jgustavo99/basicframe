<?php

namespace Core;

/**
 * BasicFrame - Framework Basic PHP
 * Classe de Carregamentos - Loader.php
 * @author João Gustavo Balestrin dos Santos <joaogustavo.b@hotmail.com>
 * @copyright (c) 2015
 * @package BasicFrame
 */
class Loader
{
    public function view($name, array $customVars = array())
    {
        // Cria as variaveis
        extract($customVars);

        // Cria o caminho da view
        $path = viewsPath() . $name . '.php';
        
        // Verifica se existe o caminho e inclui a view
        if (file_exists($path))
        {
            require_once $path;
        }
    }
}
