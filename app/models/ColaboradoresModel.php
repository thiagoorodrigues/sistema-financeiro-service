<?php

namespace app\models;

use core\Model;

class ColaboradoresModel extends Model
{
    protected string $table = 'Colaboradores';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'Nome',
        'Sobrenome',
        'Email',
        'Senha',
        'Avatar'
    ];
}