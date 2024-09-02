<?php

namespace App\Http\Controllers\Auth;

use Cartalyst\Sentinel\Sentinel;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ServerRequestInterface;
use Respect\Validation\Exceptions\ValidatorException;
use Respect\Validation\Validator as v;
use Symfony\Component\HttpFoundation\Session\Session;

final class LoginController
{
    public function __construct(
        protected Sentinel $auth,
        protected Session $session,
    ) {}

    public function index()
    {
           return view('auth/login.twig', [
                'errors' => $this->session->getFlashBag()->get('errors')[0] ?? null
           ]);
    }

    public function store(ServerRequestInterface $request)
    {
        try {
            v::key('email', v::email()->notEmpty())
                ->key('password', v::notEmpty())
                ->assert($request->getParsedBody());
        } catch (ValidatorException $e) {
            $this->session->getFlashBag()->add('errors', $e->getMessages());
            return new Response\RedirectResponse('/login');
        }

        if (!$this->auth->authenticate($request->getParsedBody())) {
            $this->session->getFlashBag()->add('errors', [
                'email' => 'Could not log you in with those details. '
            ]);

            return new Response\RedirectResponse('/login');
        }

        return new Response\RedirectResponse('/dashboard');
    }
}