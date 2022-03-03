<?php

namespace app\models;

use core\Model;

class ClientesModel extends Model
{
    protected string $table = 'Clientes';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'Nome',
        'Sobrenome',
        'Documento',
        'Email',
        'Senha',
        'Avatar'
    ];
}