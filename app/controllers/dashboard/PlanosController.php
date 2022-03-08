<?php

namespace app\controllers\dashboard;

use app\models\PlanosModel;
use core\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

class PlanosController extends Controller
{

    public function index(Request $request)
    {
        $planos = new PlanosModel();
        $planos = $planos->where('ativo', 1)->get();
        return $this->success($planos);
    }

    public function show(Request $request, Response $response, $args)
    {
        $planos = new PlanosModel();
        $planos = $planos->where('Id', $args['Id'])->first();
        return $this->success($planos);
    }

    public function create(Request $request)
    {
        $formData = $request->getParsedBody();

        $validation = $this->validate($formData, [
            'Nome' => 'required',
            'Valor' => 'required'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $planos = new PlanosModel();

        $planos->Nome = $formData['Nome'];
        $planos->Valor = $formData['Valor'];
        $planos->Descricao = $formData['Descricao'];
        $plano = $planos->save();

        if ($plano)
            return $this->success(['Mensagem' => 'Cadastro realizado com sucesso.']);
        return $this->error(['Mensagem' => 'Erro ao realizar o cadastro da plano.']);
    }

    public function update(Request $request, Response $response, $id)
    {
        $formData = $request->getParsedBody();

        $validate = $this->validate($formData, [
            'Nome' => 'required',
            'Valor' => 'required'
        ]);

        if ($validate->hasErros())
            return $this->error($validate->getErros());

        $planos = new PlanosModel();
        $plano = $planos->where('Id', $id['Id'])->first();

        if (!$plano)
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro do plano']);

        $planos->Nome = $formData['Nome'];
        $planos->Valor = $formData['Valor'];
        $planos->Descricao = $formData['Descricao'];
        $planos = $planos->save();

        if ($planos)
            return $this->success(['Mensagem' => 'Dados atualizados com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível atualizar os dados.']);
    }

    public function delete(Request $request, Response $response, $args)
    {
        $planos = new PlanosModel();
        $plano = $planos->where('Id', $args['Id'])->first();

        if (!$plano)
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro do plano']);

        $planos->Ativo = 0;
        $planos = $planos->save();

        if ($planos)
            return $this->success(['Mensagem' => 'Cadastro deletado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível deletar o cadastro.']);
    }

}