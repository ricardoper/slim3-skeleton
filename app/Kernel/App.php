<?php namespace App\Kernel;

use Slim\Container;
use Slim\App as BaseApp;

class App extends BaseApp
{

    /**
     * Register new services on dependency container
     */
    public function registerServices()
    {
        /**
         * @var $container Container
         */
        $container = $this->getContainer();

        $services = $container->settings['services'];

        if (is_array($services) && !empty($services)) {
            foreach ($services as $service) {
                /**
                 * @var $instance ServiceInterface
                 */
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
        /**
         * @var $container Container
         */
        $container = $this->getContainer();

        $middlewares = $container->settings['middlewares'];

        if (is_array($middlewares) && !empty($middlewares)) {
            foreach ($middlewares as $middleware) {
                $this->add($middleware);
            }
        }

        unset($container, $middlewares, $middleware);
    }
}
