<?php

const dataBase = [
    'production' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'database' => 'sistema_financeiro',
        'username' => 'root',
        'password' => '123456',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],
    'developer' => [
        'driver' => 'mysql',
        'host' => 'db',
        'database' => 'sistema_financeiro',
        'username' => 'root',
        'password' => '123456',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ]
];

const tokenJWT = 'c66e24a8-72e8-11ec-90d6-0242ac120003';