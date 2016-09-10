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

        foreach ($services as $service) {
            $instance = new $service();

            $container[$instance->name()] = $instance->register();

            unset($instance);
        }
    }
}
