<?php namespace App\Kernel;

interface ServiceInterface
{

    /**
     * Service register name
     */
    public function name();

    /**
     * Register new service on dependency container
     */
    public function register();
}
