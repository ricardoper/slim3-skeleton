<?php namespace App\Services;

use App\Kernel\ErrorHandler;
use App\Kernel\ServiceInterface;

class ErrorHandlerService implements ServiceInterface
{

    /**
     * Service register name
     */
    public function name()
    {
        return 'errorHandler';
    }

    /**
     * Register new service on dependency container
     */
    public function register()
    {
        return function ($container) {
            return new ErrorHandler($container->logger);
        };
    }
}
