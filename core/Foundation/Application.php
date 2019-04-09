<?php

namespace Harmony\Foundation;

use Dotenv\Dotenv;
use Harmony\Container;
use Pecee\SimpleRouter\SimpleRouter;

class Application extends Container
{
    protected $basePath;

    function __construct($basePath = null)
    {
        if ($basePath) {
            $this->setBasePath($basePath);
        }

        $this->registerBaseBindings();
        $this->bootstrap();
    }

    public function registerBaseBindings()
    {
        static::setInstance($this);

        $this->bind('app', $this);
    }

    public function setBasePath($basePath)
    {
        $this->basePath = rtrim($basePath, '\/');

        $this->bindPathsInContainer();

        return $this;
    }

    protected function bindPathsInContainer()
    {
        $this->bind('path.base', $this->basePath());
    }

    public function basePath($path = '')
    {
        return $this->basePath.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

    public function bootstrap()
    {
        // @TODO move each bootstrap to their own file
        try {
            if (!file_exists($this->basePath().'/.env')) {
                throw new Exception("Please define .env file");
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $dotenv = \Dotenv\Dotenv::create($this->basePath());
        $dotenv->load();

        // Load all config to the app
        $this->bind('config', require $this->basePath().'/config.php');

        // Start query builder and bind the class to QB
        new \Pixie\Connection('mysql', $this->get('config')['database'], 'QB');

        // StartRouterConfig
        require_once base_path().'/routes.php';
        SimpleRouter::start();
    }
}
