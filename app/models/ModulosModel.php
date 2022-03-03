<?php

namespace app\models;

use core\Model;

class ModulosModel extends Model
{
    protected string $table = 'Modulos';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'Nome',
        'Valor',
        'Pagina',
        'Icone',
        'Descricao'
    ];
}