<?php

use Slim\Factory\AppFactory;

require __DIR__.'/../vendor/autoload.php';

$app = AppFactory::create();

//routes
$routes = require __DIR__.'/../config/routers.php';
$routes($app);

$app->run();