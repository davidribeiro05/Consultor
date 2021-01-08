<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $table = 'consultores';
    protected $fillable = ['cpf', 'rg', 'orgaoExpedidor', 'uf', 'nome', 'dataDeNascimento', 'genero',
        'email', 'estadoCivil', 'linkCVLattes', 'titulacao', 'instituicaoTitulacao', 'anoTitulacao'];
    public $timestamps = false;
}

