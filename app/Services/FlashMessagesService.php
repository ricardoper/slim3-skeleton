<?php namespace App\Services;

use Slim\Flash\Messages;

class FlashMessagesService
{

    /**
     * Service register name
     */
    public function name()
    {
        return 'flash';
    }

    /**
     * Register new service on dependency container
     */
    public function register()
    {
        return function ($container) {
            return new Messages;
        };
    }
}
