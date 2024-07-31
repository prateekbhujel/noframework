<?php

use App\Core\App;
use Spatie\Ignition\Ignition;

require '../vendor/autoload.php';


error_reporting(0);


Ignition::make()->register();


// Setup




$app = new App();



// register routes 





$app->run();

