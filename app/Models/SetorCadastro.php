<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetorCadastro extends Model
{
    use HasFactory;

    protected $fillable = [
        'Sigla',
        'DescSetor',

    ];
}
