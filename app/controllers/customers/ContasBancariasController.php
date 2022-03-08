<?php

namespace app\controllers\customers;

use app\models\ContasBancariasModel;
use core\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class ContasBancariasController extends Controller
{
    public function index(Request $req, Response $res, array $args)
    {
        $clientesId = $req->getAttribute('Id');

        $query = new ContasBancariasModel();
        $result = $query->where('Ativo', 1)->where('ClientesId', $clientesId)->get();
        return $this->success($result);
    }

    public function show(Request $req, Response $res, array $args)
    {
        $clientesId = $req->getAttribute('Id');

        $query = new ContasBancariasModel();
        $result = $query->where('Id', $args['Id'])->where('ClientesId', $clientesId)->first();
        $this->success($result);
    }

    public function create(Request $req)
    {
        $formData = $req->getParsedBody();
        $clientesId = $req->getAttribute('Id');

        $validation = $this->validate($formData, [
            'BancosId' => 'required',
            'Nome' => 'required',
            'Tipo' => 'required'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $query = new ContasBancariasModel();

        $query->BancosId = $formData['BancosId'];
        $query->ClientesId = $clientesId;
        $query->Nome = $formData['Nome'];
        $query->Valor = $formData['Valor'] ?? 0;
        $query->Tipo = $formData['Tipo'];

        $result = $query->save();

        if ($result)
            return $this->success(['Mensagem' => 'Cadastro realizado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível realizar o cadastro.']);
    }

    public function update(Request $req, Response $res, array $args)
    {
        $formData = $req->getParsedBody();
        $clientesId = $req->getAttribute('Id');

        $validation = $this->validate($formData, [
            'BancosId' => 'required',
            'Nome' => 'required',
            'Tipo' => 'required'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $query = new ContasBancariasModel();

        if (!$query->where('Id', $args['Id'])->where('ClientesId', $clientesId)->first())
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro.']);

        $query->BancosId = $formData['BancosId'];
        $query->Nome = $formData['Nome'];
        $query->Valor = $formData['Valor'] ?? 0;
        $query->Tipo = $formData['Tipo'];

        if ($query->save())
            return $this->success(['Mensagem' => 'Cadastro atualziar com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível atualziar o cadastro.']);
    }

    public function delete(Request $req, Response $res, array $args)
    {
        dd($args);

        $clientesId = $req->getAttribute('Id');
        $query = new ContasBancariasModel();

        if (!$query->where('Id', $args['Id'])->where('ClientesId', $clientesId)->first())
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro.']);

        $query->Ativo = 0;

        if ($query->save())
            return $this->success(['Mensagem' => 'Cadastro deletado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível deletar o cadastro.']);
    }
}