<?php

use App\Http\Controllers\Auth\RegisterController;
use League\Route\Router;
use Psr\Container\ContainerInterface;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

return static function(Router $router, ContainerInterface $container) {

    $router->get('/',HomeController::class);

    $router->get('/dashboard',DashboardController::class);

    $router->get('/users/{user}',UserController::class);

    $router->get('/register',[RegisterController::class, 'index']);

    $router->post('/register',[RegisterController::class, 'store']);

};