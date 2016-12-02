<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $val = [])
{
    extract($val);
    return require "views/{$name}.views.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
