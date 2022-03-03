<?php

namespace app\middlewares;

use app\models\TokensModel;
use Slim\Http\Request;
use Slim\Http\Response;

class CheckTokenPublicMiddleware
{
    public function __invoke(Request $request, Response $response, $next)
    {
        try {
            $token = $request->getHeader('x-api-key')[0] ?? '';

            if (!$token)
                throw new \Exception('Acesso não autorizado.');

            $tokens = new TokensModel();
            $tokens = $tokens->where('Token', $token)->first();

            if (!$tokens)
                throw new \Exception('Acesso não autorizado token inválido.');

            //Continua com a execução
            $response = $next($request, $response);
            return $response;

        } catch (\Exception $e) {
            return $response->withJson(['Mensagem' => $e->getMessage()], 401);
        }
    }
}