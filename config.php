<?php

return [
    'database' => [
        'name' => 'todo',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => []
    ],
    'pixie-db' => [
        'driver'    => 'mysql',
        'host'      => 'db',
        'database'  => 'todo',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
        'options'   => []
    ]
];