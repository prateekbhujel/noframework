<?php

use App\Core\App;
use Spatie\Ignition\Ignition;
use League\Container\Container;



require '../vendor/autoload.php';


error_reporting(0);


Ignition::make()->register();


// Setup


$container = new Container();

$container->add('name', function(){
    
    return 'Pratik';

});

var_dump($container->get('name'));

die();

$app = new App();



// register routes 





$app->run();

