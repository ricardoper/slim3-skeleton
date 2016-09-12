<?php namespace App\Services;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\UidProcessor;
use App\Kernel\ServiceInterface;

class MonologService implements ServiceInterface
{

    /**
     * Service register name
     */
    public function name()
    {
        return 'logger';
    }

    /**
     * Register new service on dependency container
     */
    public function register()
    {
        return function ($container) {
            $settings = $container->get('settings')['logger'];

            $logger = new Logger($settings['name']);

            $logger->pushProcessor(new UidProcessor());

            $logger->pushHandler(new StreamHandler($settings['path'], Logger::DEBUG));

            unset($container, $settings);

            return $logger;
        };
    }
}
