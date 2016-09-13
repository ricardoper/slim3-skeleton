<?php namespace App\Middlewares;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Kernel\MiddlewareAbstract;

class ExampleMiddleware extends MiddlewareAbstract
{

    /**
     * Middleware
     *
     * @param Request $request
     * @param Response $response
     * @param $next
     * @return Response
     */
    public function __invoke(Request $request, Response $response, $next)
    {
        $response->getBody()->write('-- BEFORE --<br><br>');

        $response = $next($request, $response);

        $response->getBody()->write('<br><br>-- AFTER --');

        return $response;
    }
}
