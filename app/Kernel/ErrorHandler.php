<?php namespace App\Kernel;

use Slim\Handlers\Error;
use UnexpectedValueException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ErrorHandler extends Error
{

    /**
     * Logger Instance
     *
     * @var object
     */
    protected $logger;


    /**
     * ErrorHandler constructor
     *
     * @param object $logger
     */
    public function __construct($logger)
    {
        $this->logger = $logger;

        unset($logger);

        parent::__construct(env('APP_DEBUG', false));
    }

    /**
     * Invoke error handler
     *
     * @param ServerRequestInterface $request   The most recent Request object
     * @param ResponseInterface      $response  The most recent Response object
     * @param \Exception             $exception The caught Exception object
     *
     * @return ResponseInterface
     * @throws UnexpectedValueException
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, \Exception $exception)
    {
        // Log Critical Message //
        $this->logger->critical($exception->getMessage());

        return parent::__invoke($request, $response, $exception);
    }
}
