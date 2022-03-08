<?php

namespace app\middlewares;

use Firebase\JWT\JWT;
use Slim\Http\Request;
use Slim\Http\Response;

class AccessDashboardMiddleware
{
    public function __invoke(Request $request, Response $response, $next)
    {
        try {
            $token = $request->getHeader('Authorization')[0] ?? '';

            if (!$token)
                throw new \Exception('Acesso não autorizado.');

            $data = explode(' ', $token);
            $jwtDecode = JWT::decode($data[1], tokenJWT, ['HS256']);

            if (!$jwtDecode)
                throw new \Exception('Token inválido.');

            //Atribuir os dados do usuário logado à requisição
            $request = $request->withAttributes(['ClientesId' => $jwtDecode->Id]);

            //Continua com a execução
            $response = $next($request, $response);
            return $response;

        } catch (\Exception $e) {
            return $response->withJson(['Mensagem' => $e->getMessage()], 401);
        }
    }
}