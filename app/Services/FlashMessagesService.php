<?php namespace App\Services;

use Slim\Flash\Messages;
use App\Kernel\ServiceInterface;

class FlashMessagesService implements ServiceInterface
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
        return function () {
            return new Messages;
        };
    }
}
