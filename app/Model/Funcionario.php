<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'idade', 'cargo', 'salario'];
    public function endereco() {
        return $this->hasOne('App\Model\Endereco', 'funcionario_id');
    }
}
