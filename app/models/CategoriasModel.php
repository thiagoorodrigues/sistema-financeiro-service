<?php

namespace app\models;

use core\Model;

class CategoriasModel extends Model
{
    protected string $table = 'Categorias';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'CategoriasId',
        'Tipo',
        'Nome',
        'Icone',
        'Ativo'
    ];
}