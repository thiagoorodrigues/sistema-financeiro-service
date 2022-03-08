<?php

namespace app\controllers\customers;

use app\models\CategoriasModel;
use core\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class CategoriasController extends Controller
{
    public function index(Request $req, Response $res, array $args)
    {
        $query = new CategoriasModel();
        $result = $query->where('Ativo', 1)->get();
        $this->success($result);
    }

    public function show(Request $req, Response $res, array $args)
    {
        $query = new CategoriasModel();
        $result = $query->where('Ativo', 1)->where('Id', $args['Id'])->get();
        $this->success($result);
    }
}