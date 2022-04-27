<?php
    declare(strict_types=1);
    
use Instagram\Infraestructure\Controllers\AlbumCOntroller;
use Instagram\Infraestructure\Controllers\FindController;
use Instagram\Infraestructure\Controllers\HomeController;
use Slim\App;

    require __DIR__.'/../vendor/autoload.php';

return function (App $app){
    $app->get('/',HomeController::class.':index');
    $app->get('/album',AlbumCOntroller::class.':index');
    $app->get('/album/{id}',FindController::class.':index');
};