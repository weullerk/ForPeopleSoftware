<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['endereco', 'bairro', 'cidade', 'estado', 'cep'];
}
