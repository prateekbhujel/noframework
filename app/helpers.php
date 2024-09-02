<?php

use App\Core\Container;



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