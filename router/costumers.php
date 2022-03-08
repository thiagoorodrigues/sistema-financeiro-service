<?php

$app->group('/customers', function () use ($app) {
    $app->group('/auth', function () use ($app) {
        $app->post('/login', 'app\controllers\customers\AuthController:login');
        $app->post('/register', 'app\controllers\customers\AuthController:register');
    })->add(new \app\middlewares\CheckTokenPublicMiddleware());

    $app->group('/bank-account', function () use ($app) {
        $app->get('/', 'app\controllers\customers\ContasBancariasController:index');
        $app->get('/{Id}', 'app\controllers\customers\ContasBancariasController:show');
        $app->post('/', 'app\controllers\customers\ContasBancariasController:create');
        $app->put('/{Id}', 'app\controllers\customers\ContasBancariasController:update');
        $app->delete('/{Id}', 'app\controllers\customers\ContasBancariasController:delete');
    })->add(new \app\middlewares\AccessCustomersMiddleware());

    $app->group('/categories', function () use ($app) {
        $app->get('/', 'app\controllers\customers\ContasBancariasController:index');
        $app->get('/{Id}', 'app\controllers\customers\ContasBancariasController:show');
        $app->post('/', 'app\controllers\customers\ContasBancariasController:create');
        $app->put('/{Id}', 'app\controllers\customers\ContasBancariasController:update');
        $app->delete('/{Id}', 'app\controllers\customers\ContasBancariasController:delete');
    })->add(new \app\middlewares\AccessCustomersMiddleware());
});