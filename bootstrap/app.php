<?php

require __DIR__.'/../vendor/autoload.php';

//call database connection
$GLOBALS['db'] = (new \core\Connection())->query();
$GLOBALS['db']->transaction();

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);

require __DIR__.'/../router/costumers.php';
require __DIR__.'/../router/web.php';

$app->run();