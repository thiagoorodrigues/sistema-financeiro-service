<?php

namespace app\controllers\customers;

use app\models\ClientesModel;
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

        $clientes = new ClientesModel();
        $checkEmail = $clientes->where('Email', $formData['Email'])->first();

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

    public function register(Request $request)
    {
        $formData = $request->getParsedBody();

        $validation = $this->validate($formData, [
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Email' => 'required|email|unique:ClientesModel',
            'Senha' => 'required'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $clientes = new ClientesModel();

        $clientes->Nome = $formData['Nome'];
        $clientes->Sobrenome = $formData['Sobrenome'];
        $clientes->Email = $formData['Email'];
        $clientes->Senha = $this->hash($formData['Senha']);

        $clientes = $clientes->save();

        if ($clientes)
            return $this->success(['Mensagem' => 'Cadastro realizado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível realizar o cadastro.']);
    }
}