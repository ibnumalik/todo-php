<?php

namespace App\Core;

class App
{
    protected static $registry = [];

    // App::bind()
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    // App::get()
    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} found.");
        }
        return static::$registry[$key] ;
    }
}
