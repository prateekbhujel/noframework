<?php

namespace App\Http\Controllers;

use App\Config\Config;
use App\Models\User;

final class HomeController 
{
    public function __construct(
        protected Config $config
    ) { }
    
    public function __invoke()
    {   
       return view('home.twig', [
            'name'  => $this->config->get('app.name'),
            'users' => User::paginate(10)
       ]);
    }

}