<?php

namespace App\Http\Controllers;

use Laminas\Diactoros\Response;
use Psr\Http\Message\ServerRequestInterface;

class HomeController 
{

    public function __invoke(ServerRequestInterface $request)
    {
        $response = new Response();

        $response->getBody()->write('<center><h1> Home </h1></center>');

        return $response;
        
    }
    

}