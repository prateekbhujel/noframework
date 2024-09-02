<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Sentinel;
use Psr\Http\Message\ServerRequestInterface;

final class DashboardController 
{
    public function __construct(protected Sentinel $auth) { }

    public function __invoke(ServerRequestInterface $request)
    {
        return view('dashboard.twig');
    }
    
}