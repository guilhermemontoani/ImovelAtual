<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corretor extends Model
{
    protected $table="corretores";
    protected $fillable = [
        'nome_corretor',
        'creci',
        'fone',
        'email'
    ];
}
