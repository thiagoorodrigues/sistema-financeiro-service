<?php

namespace app\middlewares;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CorsMiddleware
{
    /**
     * @param ServerRequestInterface $req
     * @param ResponseInterface $res
     * @param callable $next
     * @return ResponseInterface
     */
    public function __invoke(RequestHandlerInterface $req, ResponseInterface $res, $next)
    {
        $response = $next($req, $res);
        return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('ccess-Control-Allow-Headers', 'Authorization,Content-Type,x-api-key, Origin')
            ->withHeader('ccess-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}