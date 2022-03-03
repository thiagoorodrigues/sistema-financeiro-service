<?php

namespace core;

use PDO;

class Connection
{
    public ?PDO $db;

    public function query(): Connection
    {
        $this->open();
        return $this;
    }

    public function close()
    {
        $this->db = null;
    }

    public function transaction()
    {
        $this->db->beginTransaction();
    }

    public function rollback()
    {
        $this->db->rollBack();
    }

    public function commit()
    {
        $this->db->commit();
    }

    private function open()
    {
        $this->db = new PDO("mysql:host=" . dataBase['developer']['host'] . ";dbname=" . dataBase['developer']['database'] . ";charset=" . dataBase['developer']['charset'], dataBase['developer']['username'], dataBase['developer']['password'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_AUTOCOMMIT => 0
        ]);
    }
}