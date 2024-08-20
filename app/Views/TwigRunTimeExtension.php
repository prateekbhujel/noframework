<?php


namespace App\Views;

use App\Config\Config;
use Cartalyst\Sentinel\Sentinel;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Twig\Extension\AbstractExtension;



class TwigRunTimeExtension extends AbstractExtension
{
    

    public function __construct(protected ContainerInterface $container) {}

   
    public function config(): Config
   {

        return $this->container->get(Config::class);

   }

   public function auth() : Sentinel
   {
     return $this->container->get(Sentinel::class);

   }
   
   public function session() 
   {
     return $this->container->get(Session::class);

   }

   public function csrf(): string
   {
      $guard = $this->container->get('csrf');
      

      return '
              <input type="hidden" name="' . $guard->getTokenNameKey()  . '" value="' . $guard->getTokenName()  . '" />
              <input type="hidden" name="' . $guard->getTokenvalueKey() . '" value="' . $guard->getTokenvalue() . '" />

      ';

   }

}