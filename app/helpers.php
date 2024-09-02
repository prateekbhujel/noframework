<?php

use App\Config\Config;
use App\Core\Container;
use App\Views\View;
use Laminas\Diactoros\Response;
use League\Route\Route;
use League\Route\Router;

/*
|--------------------------------------------------------------------------
|                           Helper Functions
|--------------------------------------------------------------------------
|
| Here is where you can define your global helper functions. These functions
| are available throughout the application and can be used to simplify
| common tasks that don’t require a class-based approach.
|
| Remember, helper functions are designed for simplicity and are typically
| not object-oriented.
|
*/

function app(string $abstract): object
{
    return Container::getInstance()->get($abstract);
}

function view(string $view, array $data = []): Response
{
    $response = new Response();

    $response->getBody()->write(
        app(View::class)->render($view, $data)
    );

    return $response;
}

function config(string $key, $default = null): string
{
    return app(Config::class)->get($key, $default);
}