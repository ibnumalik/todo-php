<?php

if (! function_exists('public_path')) {
    function public_path($path = '')
    {
        return 'te';
    }
}

if (! function_exists('view')) {
    function view($name, $val = [])
    {
        extract($val);
        return require "views/{$name}.views.php";
    }
}

if (! function_exists('redirect')) {
    function redirect($path)
    {
        header("Location: /{$path}");
    }
}
