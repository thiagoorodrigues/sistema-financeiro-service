<?php

namespace app\models;

use core\Model;

class BancosModel extends Model
{
    protected string $table = 'Bancos';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'Nome',
        'Codigo',
        'Ativo'
    ];
}