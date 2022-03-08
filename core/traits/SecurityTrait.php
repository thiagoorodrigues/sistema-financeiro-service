<?php

namespace core\traits;

trait SecurityTrait
{
    public function hash($string): string
    {
        return password_hash($string, PASSWORD_BCRYPT);
    }

    public function hashCheck($string, $stringHash): string
    {
        return password_verify($string, $stringHash);
    }
}