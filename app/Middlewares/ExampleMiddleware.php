<?php namespace App\Middlewares;

use Slim\App;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ExampleMiddleware
{

    /**
     * App Middleware
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param App $next
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, App $next)
    {
        $response->getBody()->write('-- BEFORE --<br><br>');

        $response = $next($request, $response);

        $response->getBody()->write('<br><br>-- AFTER --');

        return $response;
    }
}
