<?php

use App\Core\App;
use App\Providers\AppServiceProvider;
use League\Container\Container;
use App\Core\Example;
use League\Container\ReflectionContainer;

error_reporting(0);

require '../vendor/autoload.php';

$container = new Container();
$container->delegate(new ReflectionContainer() );
$container->addServiceProvider(new AppServiceProvider());


var_dump($container->get(Example::class));

die();

$app = new App();

// register routes