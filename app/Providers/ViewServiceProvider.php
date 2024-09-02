<?php

namespace App\Providers;

use App\Views\TwigExtension;
use App\Views\TwigRunTimeLoader;
use App\Views\View;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class ViewServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    public function boot(): void
    {
        // @todo: do something when class is booted.
    }

    public function register(): void
    {
        $this->getContainer()->add(View::class, function () {

            $loader = new FilesystemLoader(__DIR__ . '/../../resources/views');

            $debug = config('app.debug');

            $twig = new Environment($loader, [
                'cache' => false,
                'debug' =>$debug,
            ]);
        
            $twig->addRuntimeLoader(new TwigRunTimeLoader($this->getContainer()));
            $twig->addExtension(new TwigExtension());
            $twig->addExtension(new DebugExtension());

            return new View($twig);
        });
    }
    
    public function provides(string $id): bool
    {
        $services = [
           View::class,
        ];

        return in_array($id, $services);
    }
}
