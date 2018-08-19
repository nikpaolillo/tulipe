<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    protected $table = 'perros';

    public $timestamps = false;

    protected $fillable = ['nombre', 'tipo', 'descripcion', 'imagen'];
}
