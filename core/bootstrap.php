<?php

use App\Core\App;

try {
    if (!file_exists(__DIR__.'/../.env')) {
        throw new Exception("Please define .env file");
    }
} catch (Exception $e) {
    die($e->getMessage());
}

$dotenv = Dotenv\Dotenv::create(__DIR__ . '/..');
$dotenv->load();

// Load all config to the app
App::bind('config', require 'config.php');

// Start query builder and bind the class to QB
new \Pixie\Connection('mysql', App::get('config')['database'], 'QB');
