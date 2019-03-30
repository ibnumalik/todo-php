<?php

return [
    'database' => [
        'driver'    => 'mysql',
        'host'      => 'db',
        'database'  => 'todo',
        'username'  => 'root',
        'password'  => getenv('MYSQL_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
        'options'   => []
    ]
];
