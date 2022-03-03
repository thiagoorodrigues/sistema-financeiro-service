<?php

$app->get('/', function ($req, $res) {
    return $res->withJson(['Mensagem' => 'Não acesso autorizado.'], 401);
});

$app->options('/{routes:.+}', function ($req, $res) {
    return $res->withJson(['Mensagem' => 'Ok.'], 200);
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('ccess-Control-Allow-Headers', 'Authorization,Content-Type,x-api-key, Origin')
        ->withHeader('ccess-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});