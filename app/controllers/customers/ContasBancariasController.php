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
        $query = new ContasBancariasModel();
        $result = $query->where('Ativo', 1)->get();
        $this->success($result);
    }

    public function show(Request $req, Response $res, array $args)
    {
        $query = new ContasBancariasModel();
        $result = $query->where('Id', $args['Id'])->first();
        $this->success($result);
    }

    public function create(Request $req)
    {
        $formData = $req->getParsedBody();

        $validation = $this->validate($formData, [
            'BancosId' => 'require',
            'ClientesId' => 'require',
            'Nome' => 'require',
            'Tipo' => 'require'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $query = new ContasBancariasModel();

        $query->BancosId = $formData['BancosId'];
        $query->ClientesId = $formData['ClientesId'];
        $query->Nome = $formData['Nome'];
        $query->Valor = $formData['Valor'];
        $query->Tipo = $formData['Tipo'];

        $result = $query->save();

        if ($result)
            $this->success(['Mensagem' => 'Cadastro realizado com sucesso.']);
        $this->error(['Mensagem' => 'Não foi possível realizar o cadastro.']);
    }

    public function update(Request $req, Response $res, array $args)
    {
        $formData = $req->getParsedBody();

        $validation = $this->validate($formData, [
            'BancosId' => 'require',
            'ClientesId' => 'require',
            'Nome' => 'require',
            'Tipo' => 'require'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $query = new ContasBancariasModel();

        if (!$query->where('Id', $args['Id'])->first())
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro da Conta Bancaria']);

        $query->BancosId = $formData['BancosId'];
        $query->ClientesId = $formData['ClientesId'];
        $query->Nome = $formData['Nome'];
        $query->Valor = $formData['Valor'];
        $query->Tipo = $formData['Tipo'];

        if ($query->save())
            $this->success(['Mensagem' => 'Cadastro atualziar com sucesso.']);
        $this->error(['Mensagem' => 'Não foi possível atualziar o cadastro.']);
    }

    public function delete(Request $req, Response $res, array $args)
    {
        $query = new ContasBancariasModel();

        if (!$query->where('Id', $args['Id'])->first())
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro do colaborador']);

        $query->Ativo = 0;

        if ($query->save())
            return $this->success(['Mensagem' => 'Cadastro deletado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível deletar o cadastro.']);
    }
}