<?php

namespace app\models;

use core\Model;

class EmailsEnviadosModel extends Model
{
    protected string $table = 'EmailsEnviados';
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