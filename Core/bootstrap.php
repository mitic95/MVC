<?php

use Core\App;
use Core\database\QueryBuilder;
use Core\database\Connection;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

/**
 * @param $name
 * @param array $data
 * @return mixed
 */
function view($name, $data = [])
{
    extract($data);

    return require "App/views/{$name}.view.php";
}

/**
 * @param $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}