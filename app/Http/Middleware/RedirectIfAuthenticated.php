<?php

namespace App\Http\Middleware;

use Cartalyst\Sentinel\Sentinel;
use Laminas\Diactoros\Response\RedirectResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RedirectIfAuthenticated implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {

        if (app(Sentinel::class)->check()) 
        {   
            return new RedirectResponse('/dashboard');
        }

        return $handler->handle($request);
    }
}