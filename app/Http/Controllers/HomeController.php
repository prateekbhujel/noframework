<?php

namespace App\Http\Controllers;

use App\Config\Config;
use App\Models\User;
use App\Views\View;
use Laminas\Diactoros\Response;

class HomeController 
{
    public function __construct(
        protected Config $config,
        protected View $view,
    ) { }
    
    public function __invoke()
    {   
        dump(name());
        die();

        $response = new Response();

        $response->getBody()->write(
           $this->view->render('home.twig', [
                'name' => $this->config->get('app.name'),
                'users' => User::paginate(10),
           ])
        );

        return $response;
    }

}