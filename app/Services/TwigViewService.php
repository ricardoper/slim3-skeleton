<?php namespace App\Services;

use Slim\Views\Twig;
use Slim\Views\TwigExtension;

class TwigViewService
{

    /**
     * Service register name
     */
    public function name()
    {
        return 'view';
    }

    /**
     * Register new service on dependency container
     */
    public function register()
    {
        return function ($container) {
            $view = new Twig(
                app_path() . '/Views',
                $container->get('settings')['twig']
            );

            $view->addExtension(
                new TwigExtension(
                    $container['router'],
                    $container['request']->getUri()
                )
            );

            return $view;
        };
    }
}
