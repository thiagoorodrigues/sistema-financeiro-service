<?php

require_once '../vendor/autoload.php';

//call database connection
$GLOBALS['db'] = (new \core\Connection())->query();
$GLOBALS['db']->transaction();

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);

require_once '../router/cliente.php';
require_once '../router/dashboard.php';
require_once '../router/web.php';

$app->run();