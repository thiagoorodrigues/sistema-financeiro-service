<?php

namespace core\traits;

trait ValidationTrait
{
    private array $erros = [];
    private array $data = [];

    public function validate(array $data, array $rules)
    {
        $this->data = $data;

        foreach ($rules as $field => $rule) {
            $rules = explode('|', $rule);
            foreach ($rules as $rule) {
                if (strpos($rule, ':')) {
                    $rule = explode(':', $rule);
                    list($rule, $model) = $rule;
                    $this->$rule($field, $model);
                } else {
                    $this->$rule($field);
                }
            }
        }

        return $this;
    }

    public function getErros()
    {
        return $this->erros;
    }

    public function hasErros()
    {
        return !empty($this->erros);
    }

    private function required($field)
    {
        if (!isset($this->data[$field]) || !filter_var($this->data[$field], FILTER_FLAG_EMPTY_STRING_NULL))
            $this->erros[$field][] = "O campo {$field} é obrigatório.";
    }

    private function email($field)
    {
        if (!isset($this->data[$field]) || !filter_var($this->data[$field], FILTER_VALIDATE_EMAIL))
            $this->erros[$field][] = "O campo {$field} não é um e-mail válido.";
    }

    private function unique($field, $model = '')
    {
        //Verifica se o campo existe na rquisição
        if (!isset($this->data[$field]))
            $this->erros[$field][] = "O campo {$field} é obrigatório.";

        $controller = "app\models\\" . $model;
        $query = (new $controller)->where($field, $this->data[$field])->first();

        if ($query) {
            $this->erros[$field][] = "O campo {$field} já possui um registro.";
        }
    }

    private function max()
    {
    }

    private function isFloat($field)
    {
        if (!isset($this->data[$field]) || !is_float($this->data[$field])) {
            $this->erros[$field][] = "O campo {$field} não é um valor decimal.";
        }
    }

    private function isInt($field)
    {
        if (!isset($this->data[$field]) || !is_int($this->data[$field])) {
            $this->erros[$field][] = "O campo {$field} não é um valor inteiro.";
        }
    }

    private function hasOneValidation($rule)
    {
        return substr_count($rule, ':') == 0;
    }

    private function hasTwoOrMoreValidation($rule)
    {
        return substr_count($rule, ':') >= 1;
    }
}