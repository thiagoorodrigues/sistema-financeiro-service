<?php

namespace app\models;

use core\Model;

class PlanosModel extends Model
{
    protected string $table = 'Planos';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'Nome',
        'Valor',
        'Descricao',
    ];
}