<?php

namespace app\models;

use core\Model;

class CategoriasClientesModel extends Model
{
    protected string $table = 'CategoriasClientes';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'ClientesId',
        'CategoriasId',
        'Tipo',
        'Nome',
        'Icone',
        'Ativo'
    ];
}