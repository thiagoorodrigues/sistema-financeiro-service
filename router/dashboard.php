<?php

$app->group('/dashboard', function () use ($app) {
    $app->group('/auth', function () use ($app) {
        $app->post('/login', 'app\controllers\dashboard\AuthController:login');
        $app->post('/recuperar-senha', 'app\controllers\dashboard\AuthController:register');
    })->add(new \app\middlewares\AccessDashboardMiddleware());

    $app->group('/collaborators', function () use ($app) {
        $app->get('/', 'app\controllers\dashboard\ColaboradoresController:index');
        $app->get('/{Id}', 'app\controllers\dashboard\ColaboradoresController:show');
        $app->post('/', 'app\controllers\dashboard\ColaboradoresController:create');
        $app->put('/{Id}', 'app\controllers\dashboard\ColaboradoresController:update');
        $app->delete('/{Id}', 'app\controllers\dashboard\ColaboradoresController:delete');
    })->add(new \app\middlewares\AccessDashboardMiddleware());

    $app->group('/plans', function () use ($app) {
        $app->get('/', 'app\controllers\dashboard\PlanosController:index');
        $app->get('/{Id}', 'app\controllers\dashboard\PlanosController:show');
        $app->post('/register', 'app\controllers\dashboard\PlanosController:create');
        $app->put('/update/{Id}', 'app\controllers\dashboard\PlanosController:update');
        $app->delete('/delete/{Id}', 'app\controllers\dashboard\PlanosController:delete');
    })->add(new \app\middlewares\AccessDashboardMiddleware());

    $app->group('/modules', function () use ($app) {
        $app->get('/', 'app\controllers\dashboard\ModulosController:index');
        $app->get('/{Id}', 'app\controllers\dashboard\ModulosController:show');
        $app->post('/', 'app\controllers\dashboard\ModulosController:create');
        $app->put('/{Id}', 'app\controllers\dashboard\ModulosController:update');
        $app->delete('/{Id}', 'app\controllers\dashboard\ModulosController:delete');
    })->add(new \app\middlewares\AccessDashboardMiddleware());
});