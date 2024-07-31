<?php

use App\Providers\AppServiceProvider;
use League\Container\Container;

error_reporting(0);

require '../vendor/autoload.php';

$container = new Container();
$container->addServiceProvider(new AppServiceProvider());

var_dump($container->get('name'));
die();
