<?php

namespace App\Http\Controllers;

use App\Cachorro;
use App\Perro;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCachorros()
    {
        $cachorros = Cachorro::all();

        return view('galeria.cachorros', ['cachorros' => $cachorros]);
    }

    public function indexPerros()
    {
        $perros = Perro::all();

        return view('galeria.perros', ['perros' => $perros]);
    }
}
