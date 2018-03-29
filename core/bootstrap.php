<?php

use App\Core\App;

App::bind('config', require 'config.php');

new \Pixie\Connection('mysql', App::get('config')['pixie-db'], 'QB');

function view($name, $val = [])
{
    extract($val);
    return require "views/{$name}.views.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
