<?php

$app->get('/', function ($req, $res) {
    return $res->withJson(['Mensagem' => 'Não acesso autorizado.'], 401);
});

$app->options('/{routes:.+}', function ($req, $res) {
    return $res->withJson(['Mensagem' => 'Ok.'], 200);
});

$app->add(new \app\middlewares\CorsMiddleware());