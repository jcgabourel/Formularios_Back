<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'dec_contribucion_tipos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $attributes = [
        'Tipo_Impuesto' => "E",
    ];


    use HasFactory;
}
