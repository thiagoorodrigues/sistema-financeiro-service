<?php

namespace app\middlewares;

use Slim\Http\Request;
use Slim\Http\Response;

class CorsMiddleware
{
    public function __invoke(Request $req, Response $res, $next)
    {
        $response = $next($req, $res);
        return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('ccess-Control-Allow-Headers', 'Authorization,Content-Type,x-api-key, Origin')
            ->withHeader('ccess-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}