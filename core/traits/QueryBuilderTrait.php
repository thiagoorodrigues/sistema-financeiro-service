<?php

namespace core\traits;


trait QueryBuilderTrait
{
    use UuidTrait;

    private $argsAlias = '';
    private $argsSelect = '*';
    private $argsWhere = [];
    private $argsOrder = [];
    private $argsJoin = '';

    public function alias($alias = '')
    {
        $this->argsAlias = $alias;
        return $this;
    }

    public function select()
    {
        $args = func_get_args();
        $selectArray = [];

        foreach ($args as $key => $value) {
            if (!is_string($value)) {
                throw new Exception('Os parametros enviados no method select deve ser uma string');
            } else {
                $selectArray[] = $value;
            }
        }

        $this->argsSelect = implode(',', $selectArray);

        return $this;
    }

    public function where()
    {
        $args = func_get_args();

        if (is_string($args[0])) {

            if (count($args) === 3) {

                $column = " {$args[0]} {$args[1]} '{$args[2]}'";
                $this->argsWhere[] = $column;

            } else if (count($args) === 2) {

                $column = " {$args[0]} = '{$args[1]}'";
                $this->argsWhere[] = $column;

            }

        } else if (is_array($args[0])) {

            foreach ($args as $value) {
                if (count($args) === 3) {

                    $column = " {$value[0]} {$value[1]} '{$value[2]}'";
                    $this->argsWhere[] = $column;

                } else if (count($value) === 2) {

                    $column = " {$value[0]} = '{$value[1]}'";
                    $this->argsWhere[] = $column;

                }
            }

        }

        return $this;
    }

    public function join($table = '', $args = '')
    {
        $this->argsJoin = " JOIN {$table} ON {$args}";
        return $this;
    }

    public function like($column, $value)
    {
        $this->argsWhere[] = "{$column} LIKE '%{$value}%'";

        return $this;
    }

    public function order()
    {
        $args = func_get_args();

        if (is_string($args[0])) {

            $column = " {$args[0]} {$args[1]}";
            $this->argsOrder[] = $column;

        } else if (is_array($args[0])) {

            foreach ($args as $value) {
                $column = " {$value[0]} {$value[1]}";
                $this->argsOrder[] = $column;
            }

        }

        return $this;
    }

    private function create()
    {
        if ($this->timestamp) {
            $this->content['DataCadastro'] = date('Y-m-d H:i:s');
            $this->content['DataAlteracao'] = date('Y-m-d H:i:s');
        }

        $data = $this->handleData();
        $id = self::v4();

        $data['DataReceived']['Id'] = $id;

        $sql = "INSERT INTO {$this->table} SET {$this->primaryKey}='{$id}', " . implode(',', $data['Columns']);

        $query = $this->db->db->prepare($sql);
        $query = $query->execute($data['Values']);

        return $query ? $data['DataReceived'] : $query;
    }

    private function read()
    {
        $from = $this->table;

        $sql = "SELECT {$this->argsSelect} FROM {$from}";

        if ($this->argsJoin)
            $sql .= $this->argsJoin;

        if ($this->argsWhere)
            $sql .= ' WHERE ' . implode(' and ', $this->argsWhere);

        if ($this->argsOrder) {
            $sql .= " ORDER BY " . implode(', ', $this->argsOrder);;
        }

        $query = $this->db->db->prepare($sql);
        $query->execute();

        return $query;
    }

    private function update()
    {
        if ($this->timestamp) {
            $this->content['DataAlteracao'] = date('Y-m-d H:i:s');
        }

        $data = $this->handleData();

        $sql = "UPDATE {$this->table} SET " . implode(',', $data['Columns']);

        if ($this->argsWhere)
            $sql .= " WHERE " . implode(' and ', $this->argsWhere);

        $query = $this->db->db->prepare($sql);
        $query = $query->execute($data['Values']);

        return $query ? $data['DataReceived'] : $query;
    }

    private function delete()
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->argsWhere}";

        $query = $this->db->db->prepare($sql);
        $query = $query->execute();

        return $query;
    }

    private function handleData()
    {
        $formData = [];

        $data = $this->content;

        //Remove os dados vazios
        foreach ($data as $key => $value) {
            if (!is_numeric($value) && empty($value)) {
                unset($data[$key]);
            }
        }

        //Adiciona aos array os valores das coluns e dos values
        foreach ($data as $key => $value) {
            $formData['Columns'][] = "$key=:$key";
            $formData['Values'][":$key"] = "$value";
            $formData['DataReceived']["$key"] = "$value";
        }

        return $formData;
    }
}