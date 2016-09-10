<?php namespace App\Services;

use App\Kernel\ControllerStrategy;

class ControllerStrategyService
{

    /**
     * Service register name
     */
    public function name()
    {
        return 'foundHandler';
    }

    /**
     * Register new service on dependency container
     */
    public function register()
    {
        return function ($container) {
            return new ControllerStrategy();
        };
    }
}
