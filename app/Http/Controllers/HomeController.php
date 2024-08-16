<?php

namespace App\Http\Controllers;

use App\Config\Config;
use App\Models\User;
use App\Views\View;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController 
{

    
    public function __construct(

        protected Config $config,
        protected View $view,
        protected Session $session,

    ) { }

    
    
    public function __invoke(ServerRequestInterface $request)
    {

        $response = new Response();

        $response->getBody()->write(

           $this->view->render('home.twig', [

                'name' => $this->config->get('app.name'),
                'users' => User::get(),
                'message' => $this->session->getFlashBag()->get('message'),
           ])
            
        );

        return $response;
        
    }
    

}