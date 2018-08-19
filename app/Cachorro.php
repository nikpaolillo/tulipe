<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cachorro extends Model
{
    protected $table = 'cachorros';

    public $timestamps = false;

    protected $fillable = ['nombre', 'tipo', 'descripcion', 'imagen'];
}
