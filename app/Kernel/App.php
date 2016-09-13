<?php namespace App\Kernel;

use Slim\App as BaseApp;

class App extends BaseApp
{

    /**
     * Register new services on dependency container
     */
    public function registerServices()
    {
        $container = $this->getContainer();

        $services = $container->get('settings')['services'];

        if (is_array($services) && !empty($services)) {
            foreach ($services as $service) {
                $instance = new $service();

                $container[$instance->name()] = $instance->register();

                unset($instance);
            }
        }

        unset($container, $services, $service);
    }

    /**
     * Register App Middlewares
     */
    public function registerAppMiddlewares()
    {
        $container = $this->getContainer();

        $middlewares = $container->get('settings')['middlewares'];

        if (is_array($middlewares) && !empty($middlewares)) {
            foreach ($middlewares as $middleware) {
                $this->add($middleware);
            }
        }

        unset($container, $middlewares, $middleware);
    }
}
