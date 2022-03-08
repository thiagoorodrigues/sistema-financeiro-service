<?php

namespace app\models;

use core\Model;

class ContasBancariasModel extends Model
{
    protected string $table = 'ContasBancarias';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'BancosId',
        'ClientesId',
        'Nome',
        'Valor',
        'Tipo',
        'Ativo'
    ];
}