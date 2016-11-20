<?php

namespace Cormy\Server\Fixtures;

use Cormy\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class RequestHandler implements RequestHandlerInterface
{
    /**
     * Process an incoming server request and return the response.
     *
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request):ResponseInterface
    {
        $response = new Response();
        $response = $response->withHeader('content-type', 'application/json; charset=utf-8');
        // ...

        return $response;
    }
}
