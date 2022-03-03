<?php

require __DIR__ . '/vendor/autoload.php';

include __DIR__ . '/config/Constantes.php';

list(
    'driver' => $adapter,
    'host' => $host,
    'database' => $name,
    'username' => $user,
    'password' => $pass,
    'charset' => $charset,
    'collection' => $collection
) = dataBase['developer'];

return [
    'paths' => [
        'migrations' => [
            __DIR__ . '/database/migrations'
        ],
        'seeds' => [
            __DIR__.'/database/seeds'
        ]
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'development',
        'development' => [
            'adapter' => $adapter,
            'host' => 'localhost:3306',
            'name' => $name,
            'user' => $user,
            'pass' => $pass,
            'charset' => $charset,
            'collection' => $collection
        ]
    ]
];
