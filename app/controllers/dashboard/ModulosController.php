<?php

namespace app\controllers\dashboard;

use app\models\IndividuosModel;
use app\models\ModulosModel;
use core\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

class ModulosController extends Controller
{

    public function index(Request $request)
    {
        $modulos = new ModulosModel();
        $modulos = $modulos->where('Ativo', 1)->get();
        return $this->success($modulos);
    }

    public function show(Request $request, Response $response, $args)
    {
        $modulos = new ModulosModel();
        $modulos = $modulos->where('Id', $args['Id'])->first();
        return $this->success($modulos);
    }

    public function create(Request $request)
    {
        $formData = $request->getParsedBody();

        $validation = $this->validate($formData, [
            'Nome' => 'required',
            'Pagina' => 'required',
            'Valor' => 'required'
        ]);

        if ($validation->hasErros())
            return $this->error($validation->getErros());

        $query = new ModulosModel();

        $query->Nome = $formData['Nome'];
        $query->Valor = $formData['Valor'];
        $query->Descricao = $formData['Descricao'] ?? '';
        $query->Pagina = $formData['Pagina'] ?? '';
        $query->Icone = $formData['Icone'] ?? '';

        if ($query->save())
            return $this->success(['Mensagem' => 'Cadastro realizado com sucesso.']);
        return $this->error(['Mensagem' => 'Erro ao realizar o cadastro da plano.']);
    }

    public function update(Request $request, Response $response, $id)
    {
        $formData = $request->getParsedBody();

        $validate = $this->validate($formData, [
            'Nome' => 'required',
            'Pagina' => 'required',
            'Valor' => 'required'
        ]);

        if ($validate->hasErros())
            return $this->error($validate->getErros());

        $query = new ModulosModel();

        if (!$query->where('Id', $id['Id'])->first())
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro do modulo']);

        $query->Nome = $formData['Nome'];
        $query->Valor = $formData['Valor'];
        $query->Descricao = $formData['Descricao'] ?? '';
        $query->Pagina = $formData['Pagina'] ?? '';
        $query->Icone = $formData['Icone'] ?? '';

        if ($query->save())
            return $this->success(['Mensagem' => 'Dados atualizados com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível atualizar os dados.']);
    }

    public function delete(Request $request, Response $response, $args)
    {
        $query = new ModulosModel();

        if (!$query->where('Id', $args['Id'])->first())
            return $this->error(['Mensagem' => 'Não foi possível encontrar o cadastro do plano']);

        $query->Ativo = 0;

        if ($query->save())
            return $this->success(['Mensagem' => 'Cadastro deletado com sucesso.']);
        return $this->error(['Mensagem' => 'Não foi possível deletar o cadastro.']);
    }

}