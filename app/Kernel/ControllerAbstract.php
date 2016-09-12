<?php namespace App\Kernel;

use Slim\Views\Twig;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

abstract class ControllerAbstract
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

    /**
     * Get Request
     *
     * @return Request
     */
    protected function getRequest()
    {
        return $this->container->request;
    }

    /**
     * Get Response
     *
     * @return Response
     */
    protected function getResponse()
    {
        return $this->container->response;
    }

    /**
     * Get Twig Engine
     *
     * @return Twig
     */
    protected function getView()
    {
        return $this->container->view;
    }

    /**
     * Render view
     *
     * @param string $template
     * @param array $data
     * @return string
     */
    protected function render($template, $data = [])
    {
        return $this->getView()->render($this->getResponse(), $template, $data);
    }
}
