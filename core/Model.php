<?php

namespace core;

use core\traits\QueryBuilderTrait;

class Model
{
    use QueryBuilderTrait;

    protected string $table = '';
    protected string $primaryKey = '';
    protected bool $timestamp = true;
    protected array $fillable = [];

    private $db = null;
    private $classFather = null;
    private $content = [];

    public function __construct()
    {
        $this->db = $GLOBALS['db'];

        if (!empty($this->fillable)) {
            foreach ($this->fillable as $value) {
                $this->content[$value] = '';
            }
        }
    }

    public function __distruct()
    {
        $this->db->close();
    }

    public function __set($name, $value)
    {
        $this->content[$name] = $value;
    }

    public function __get($name)
    {
        return $this->content[$name];
    }

    public function __isset($name)
    {
        return isset($this->content[$name]);
    }

    public function __unset($name)
    {
        unset($this->content[$name]);
    }

    public function get()
    {
        return $this->read()->fetchAll();
    }

    public function first()
    {
        return $this->read()->fetch();
    }

    public function save()
    {
        if (!$this->argsWhere) {
            return $this->create();
        } else {
            return $this->update();
        }
    }
}
