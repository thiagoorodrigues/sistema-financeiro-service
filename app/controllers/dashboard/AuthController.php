<?php

namespace app\controllers\dashboard;

use app\models\ColaboradoresModel;
use core\Controller;
use Firebase\JWT\JWT;
use Slim\Http\Request;
use Slim\Http\Response;

class AuthController extends Controller
{
    public function login(Request $request, Response $response)
    {
        $formData = $request->getParsedBody();

        $validation = $this->validate($formData, [
            'Email' => 'required|email',
            'Senha' => 'required'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $colaborador = new ColaboradoresModel();
        $checkEmail = $colaborador->where('Email', $formData['Email'])->first();

        if ($checkEmail) {
            if ($this->hashCheck($formData['Senha'], $checkEmail->Senha)) {

                $payload = [
                    'exp' => time() + (60 * 10),
                    'iat' => time(),
                    'Id' => $checkEmail->Id
                ];

                $token = JWT::encode($payload, tokenJWT, 'HS256');

                $body = [
                    'Name' => "{$checkEmail->Nome} {$checkEmail->Sobrenome}",
                    'Token' => $token
                ];

                return $this->success(['Mensagem' => 'Login realizado com sucesso', 'body' => $body]);
            } else {
                return $this->error(['Mensagem' => 'Os dados de e-mail e ou senha estão inválidos.']);
            }
        } else {
            return $this->error(['Mensagem' => 'Os dados de e-mail e ou senha estão inválidos.']);
        }
    }
}