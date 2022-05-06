<?php

namespace app\controllers\customers;

use app\models\CategoriasClientesModel;
use app\models\CategoriasModel;
use core\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class CategoriasClientesController extends Controller
{
    public function index(Request $req, Response $res, array $args)
    {
        $query = new CategoriasModel();
        $result = $query->where('Ativo', 1)->get();

        foreach ($result as $key => $value){

        }

        $this->success($result);
    }

    public function show(Request $req, Response $res, array $args)
    {
        $query = new CategoriasClientesModel();
        $result = $query->where('Ativo', 1)->where('Id', $args['Id'])->get();
        $this->success($result);
    }

    public function create(Request $req)
    {
        $formData = $req->getParsedBody();

        $validation = $this->validate($formData, [
            'CategoriasId' => 'require',
            'Nome' => 'require',
            'Tipo' => 'require'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $query = new CategoriasClientesModel();

        $query->ClientesId = $formData['ClientesId'];
        $query->CategoriasId = $formData['CategoriasId'];
        $query->Tipo = $formData['Tipo'];
        $query->Nome = $formData['Nome'];
        $query->Icone = $formData['Icone'] ?? '';

        $result = $query->save();

        if ($result)
            $this->success(['Mensagem' => 'Cadastro realizado com sucesso.']);
        $this->error(['Mensagem' => 'Não foi possível realizar o cadastro.']);
    }

    public function update()
    {
    }
}