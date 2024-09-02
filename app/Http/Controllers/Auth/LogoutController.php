<?php

namespace App\Http\Controllers\Auth;

use Cartalyst\Sentinel\Sentinel;
use Laminas\Diactoros\Response;
use Symfony\Component\HttpFoundation\Session\Session;

final class LogoutController 
{
    public function __construct(
        protected Sentinel $auth,
        protected Session $session
    ) { }
    
    public function __invoke()
    {
        $this->auth->logout();

        $this->session->getFlashBag()->add('message', 'You have been logged out.');

        return new Response\RedirectResponse('/');
    }

    

}