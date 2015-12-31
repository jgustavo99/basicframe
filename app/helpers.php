<?php

/**
 * 
 * BasicFrame - Framework Basic PHP
 * Helpers - Classe de Funções
 */

/*
 * Função para Retornar um valor que esta declarado no array config
 */
function getConfig($section, $param = null)
{
    require 'core/config.php';

    if($param)
    {
        if (array_key_exists($section, $config))
        {
            if (array_key_exists($param, $config[$section]))
            {
                return $config[$section][$param];
            }
	    }
    
    }else{

        if (array_key_exists($section, $config))
        {
            return $config[$section];
        }
    }
}

/**
 * Retorna o diretório das views
 */
function viewsPath()
{
    return BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR;
}

/**
 * Instancia a Classe Load e Carrega a View
 */
function view($name, array $customVars = array())
{
    $loader = new \Core\Loader();
    return $loader->view($name, $customVars);
}

/**
 * Retorna URL com a rota conforme passado como parametro
 */
function url($router)
{
    return getConfig('app','url').$router;
}