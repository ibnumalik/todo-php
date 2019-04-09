<?php

use App\Core\Router;
use App\Core\Request;
use Pecee\SimpleRouter\SimpleRouter;
/**
 * Register the composer autoloader
 */
require __DIR__.'/../vendor/autoload.php';

/**
 * Boot our app engine
 */
$app = require_once __DIR__.'/../core/bootstrap.php';
require_once __DIR__.'/../routes.php';

SimpleRouter::start();
