<?php

$app->group('/customers', function () use ($app) {
    $app->group('/auth', function () use ($app) {
        $app->post('/login', 'app\controllers\customers\AuthController:login');
        $app->post('/register', 'app\controllers\customers\AuthController:register');
    })->add(new \app\middlewares\CheckTokenPublicMiddleware());

    $app->group('/bacnk-account', function () use ($app) {
        $app->get('/', 'app\controllers\customers\ContasBancariasController:index');
        $app->get('/{Id}', 'app\controllers\customers\ContasBancariasController:show');
        $app->post('/register', 'app\controllers\customers\ContasBancariasController:store');
        $app->post('/update/{Id}', 'app\controllers\customers\ContasBancariasController:update');
        $app->delete('/delete', 'app\controllers\customers\ContasBancariasController:delte');
    })->add(new \app\middlewares\CheckTokenPrivateMiddleware());

    $app->group('/categories', function () use ($app) {
        $app->get('/', 'app\controllers\customers\ContasBancariasController:index');
        $app->get('/{Id}', 'app\controllers\customers\ContasBancariasController:show');
        $app->post('/register', 'app\controllers\customers\ContasBancariasController:store');
        $app->post('/update/{Id}', 'app\controllers\customers\ContasBancariasController:update');
        $app->delete('/delete', 'app\controllers\customers\ContasBancariasController:delte');
    })->add(new \app\middlewares\CheckTokenPrivateMiddleware());
});