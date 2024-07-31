<?php

use App\Config\Config;
use App\Core\App;
use App\Core\Container;
use App\Providers\AppServiceProvider;
use App\Providers\ConfigServiceProvider;
use League\Container\ReflectionContainer;


error_reporting(0);


require '../vendor/autoload.php';


$container = Container::getInstance();
$container->delegate(new ReflectionContainer() );
$container->addServiceProvider(new AppServiceProvider());
$container->addServiceProvider(new ConfigServiceProvider());

var_dump($container->get(Config::class)->get('app.name'));

die();

$app = new App();



// register routes

$app->run();