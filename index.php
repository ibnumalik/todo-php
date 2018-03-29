<?php

use App\Core\Router;
use App\Core\Request;
use Pecee\SimpleRouter\SimpleRouter;

require 'vendor/autoload.php';
require 'core/bootstrap.php';
require_once 'routes.php';

SimpleRouter::start();