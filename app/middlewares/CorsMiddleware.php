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
        $res->withHeader('Access-Control-Allow-Origin', 'http://localhost:3000');
        $res = $next($req, $res);
        return $res;
    }
}