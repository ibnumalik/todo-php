<?php

use Harmony\Container;


if (! function_exists('app')) {
    function app() {
        return Container::getInstance();
    }
}

if (! function_exists('public_path')) {
    /**
     * Get the path to the public folder
     *
     * @param  string $path
     * @return string
     */
    function public_path($path = '')
    {
        return app()->get('path.public').($path ? DIRECTORY_SEPARATOR.ltrim($path, DIRECTORY_SEPARATOR) : $path);
    }
}

if (! function_exists('base_path')) {
    function base_path($path = '')
    {
        return app()->basePath().($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if (! function_exists('view')) {
    function view($name, $val = [])
    {
        extract($val);
        return require base_path()."/views/{$name}.views.php";
    }
}

if (! function_exists('redirect'))
{
    function redirect($path)
    {
        header("Location: /{$path}");
    }
}

if (! function_exists('dd'))
{
    function dd($arg)
    {
        die(var_dump($arg));
    }
}
