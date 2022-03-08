<?php

namespace core\traits;

use Slim\Http\Response;

trait ResponseTrait
{
    public function success($data = [], $code = 200)
    {
        $GLOBALS['db']->commit();
        $GLOBALS['db']->close();

        return (new Response())->withJson($data, $code);
    }

    public function error($data = [], $code = 400)
    {
        $GLOBALS['db']->rollback();
        $GLOBALS['db']->close();

        return (new Response())->withJson($data, $code);
    }

    public function json($data = [])
    {
        header("Content-Type: application/json");
        die(json_encode($data, JSON_NUMERIC_CHECK));
    }
}