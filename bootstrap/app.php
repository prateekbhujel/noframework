<?php

use App\Config\Config;
use App\Core\App;
use App\Core\Container;
use App\Providers\ConfigServiceProvider;
use Dotenv\Dotenv;
use Laminas\Diactoros\Request;
use Laminas\Diactoros\Response;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Container\ReflectionContainer;
use League\Route\Router;

error_reporting(0);


require '../vendor/autoload.php';


$dotenv = Dotenv::createImmutable(__DIR__ . '/..//');

$dotenv->load();


$container = Container::getInstance();

$container->delegate(new ReflectionContainer() );

$container->addServiceProvider(new ConfigServiceProvider());

$config = $container->get(Config::class);


foreach($config->get('app.providers') as $provider)
{
    $container->addServiceProvider(new $provider());
    
}




$app = new App();


$router = $container->get(Router::class);
$router->get('/', function() {
 
    $response = new Response();

    $response->getBody()->write('<h1>home</h1>');

    return $response;

});

$response = $router->dispatch($container->get(Request::class));

(new SapiEmitter())->emit($response);

$app->run();