<?php

namespace App\Views;

use Twig\Environment;

class View
{
    public function __construct(protected Environment $twig) {}

    public function exists(string $view)
    {
        return $this->twig->getLoader()->exists($view);
    }
    
    /*
    |------------------------------------------------------------|
    | Alias for render method to by pass pagination of Laravel.  |
    |------------------------------------------------------------|
    */
    public function make(string $view, array $data = []): string
    {
        return $this->render($view, $data);
    }
    
    public function render(string $view, array $data = []): string
    {
        return $this->twig->render($view, $data);
    }

}