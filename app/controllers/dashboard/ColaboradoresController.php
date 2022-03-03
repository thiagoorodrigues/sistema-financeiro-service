<?php

namespace app\controllers\dashboard;

use app\models\ColaboradoresModel;

use core\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class ColaboradoresController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $query = new ColaboradoresModel();
        $query = $query->where('Ativo', 1)->get();
        return $this->success($query);
    }

    public function show(Request $request, Response $response, $args)
    {
        $query = new ColaboradoresModel();
        $query = $query->where('Id', $args['Id'])->first();
        return $this->success($query);
    }

    public function create(Request $request)
    {
        $formData = $request->getParsedBody();

        $validation = $this->validate($formData, [
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Email' => 'required|email|unique:ColaboradoresModel',
            'Senha' => 'required'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $colaboradores = new ColaboradoresModel();

        $colaboradores->Nome = $formData['Nome'];
        $colaboradores->Sobrenome = $formData['Sobrenome'];
        $colaboradores->Email = $formData['Email'];
        $colaboradores->Senha = $this->hash($formData['Senha']);

        $colaboradores = $colaboradores->save();

        if ($colaboradores)
            return $this->success(['mensagem' => 'Cadastro realizado com sucesso.']);
        return $this->error(['mensagem' => 'Não foi possível realizar o cadastro.']);
    }

    public function update(Request $request, Response $response, $args)
    {
        $formData = $request->getParsedBody();

        $validation = $this->validate($formData, [
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Email' => 'required|email'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $colaboradores = new ColaboradoresModel();
        $colaborador = $colaboradores->where(['Id', $args['Id']])->first();

        if (!$colaborador)
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro do colaborador']);

        $colaboradores->Nome = $formData['Nome'];
        $colaboradores->Sobrenome = $formData['Sobrenome'];
        $colaboradores->Email = $formData['Email'];

        $colaboradores = $colaboradores->save();

        if ($colaboradores)
            return $this->success(['Mensagem' => 'Cadastro atualizado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível atualizar o cadastro.']);
    }

    public function delete(Request $request, Response $response, $args)
    {
        $colaboradores = new ColaboradoresModel();
        $colaborador = $colaboradores->where('Id', $args['Id'])->first();

        if (!$colaborador)
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro do colaborador']);

        $colaboradores->Ativo = 0;
        $colaboradores = $colaboradores->save();

        if ($colaboradores)
            return $this->success(['Mensagem' => 'Cadastro deletado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível deletar o cadastro.']);
    }
}