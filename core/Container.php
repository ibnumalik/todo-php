<?php

namespace Harmony;

use Harmony\Contracts\Container as ContainerContract;

class Container implements ContainerContract
{
    protected static $instance;

    protected static $instances = [];

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

    public static function setInstance(ContainerContract $container = null)
    {
        return static::$instance = $container;
    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }
}
