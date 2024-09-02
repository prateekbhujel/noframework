<?php

namespace App\Views;

use App\Config\Config;
use Cartalyst\Sentinel\Sentinel;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Twig\Extension\AbstractExtension;

class TwigRunTimeExtension extends AbstractExtension
{
    public function __construct(protected ContainerInterface $container) { }
   
    public function config(): Config
   {
        return app(Config::class);
   }
    public function old(string $key)
   {
        return $this->session()->getFlashBag()->peek('old')[$key] ?? null;
   }

   public function auth() : Sentinel
   {
     return app(Sentinel::class);
   }

   public function session() 
   {
     return app(Session::class);
   }

   public function csrf(): string
   {
      $guard = app('csrf');
      return '
              <input type="hidden" name="' . $guard->getTokenNameKey()  . '" value="' . $guard->getTokenName()  . '" />
              <input type="hidden" name="' . $guard->getTokenvalueKey() . '" value="' . $guard->getTokenvalue() . '" />
      ';
   }
   
   public function route(string $name, array $arguments = []): string
   {
      return route($name, $arguments);
   }
}