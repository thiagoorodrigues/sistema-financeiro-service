<?php

namespace app\models;

use core\Model;

class TokensModel extends Model
{
    protected string $table = 'Tokens';
    protected string $primaryKey = 'Id';
    protected bool $timestamp = true;

    protected array $fillable = [
        'Nome',
        'Token'
    ];
}