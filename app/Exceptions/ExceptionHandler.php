<?php

namespace App\Exceptions;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ExceptionHandler
{
    public function handle(ServerRequestInterface $request, ResponseInterface $response, \Throwable $e)
    {
        throw  $e;
    }


}