<?php

namespace App\Http\Controllers\Auth;

use Cartalyst\Sentinel\Sentinel;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ServerRequestInterface;
use Respect\Validation\Exceptions\ValidatorException;
use Respect\Validation\Validator as v;
use Symfony\Component\HttpFoundation\Session\Session;

final class RegisterController 
{
    public function __construct(
        protected Sentinel $auth,
        protected Session $session
    ) { }

    public function index()
    {
        return view('auth/register.twig', [
            'errors' => $this->session->getFlashBag()->get('errors')[0] ?? null
        ]);
    }
    
    public function store(ServerRequestInterface $request) 
    {
        try {
            v::key('first_name', v::alpha()->notEmpty())
                ->key('email', v::email()->notEmpty()->not(v::existsInDatabase('users', 'email')))
                ->key('password', v::notEmpty())
                ->assert($request->getParsedBody());
        } catch ( ValidatorException $e) {
            $this->session->getFlashBag()->add('errors', $e->getMessages());
            return new Response\RedirectResponse('/register');
        }
        if($user = $this->auth->registerAndActivate($request->getParsedBody()))
        {
            $this->auth->login($user);
        }
        
        return new Response\RedirectResponse('/dashboard');
    }
}