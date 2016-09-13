<?php namespace App\Kernel;

use Interop\Container\ContainerInterface;

abstract class MiddlewareAbstract
{

    /**
     * Slim Container
     *
     * @var ContainerInterface
     */
    protected $container;


    /**
     * Controller constructor
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        unset($container);
    }


    /**
     * Get Slim Container
     *
     * @return ContainerInterface
     */
    protected function getContainer()
    {
        return $this->container;
    }
}
