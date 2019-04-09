<?php

namespace Harmony;

use Harmony\Contracts\Container as ContainerContract;

class Container implements ContainerContract
{
    protected static $instance;

    protected $instances = [];

    public function bind($key, $value)
    {
        $this->instances[$key] = $value;
    }

    public function get($key)
    {
        if (! array_key_exists($key, $this->instances)) {
            throw new \Exception("No {$key} found.");
        }
        return $this->instances[$key] ;
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
