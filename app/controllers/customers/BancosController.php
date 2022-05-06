<?php

namespace app\controllers\customers;

use app\models\BancosModel;
use core\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class BancosController extends Controller
{
    public function index(Request $req, Response $res, array $args)
    {
        dd($req);
        $query = new BancosModel();
        $result = $query->select('Id, Nome, Codigo')->where('Ativo', 1)->get();
        $this->success($result);
    }

    public function show(Request $req, Response $res, array $args)
    {
        $query = new BancosModel();
        $result = $query->where('Ativo', 1)->where('Id', $args['Id'])->first();
        $this->success($result);
    }
}