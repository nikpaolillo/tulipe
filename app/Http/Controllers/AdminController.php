<?php

namespace App\Http\Controllers;

use App\Cachorro;
use App\Perro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
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
    public function index()
    {
        $perros = Perro::all();
        $cachorros = Cachorro::all();

        return view('admin.index', ['perros' => $perros, 'cachorros' => $cachorros]);
    }

    public function nuevoPerro(Request $request)
    {
        Perro::create([
           'nombre' => $request->nombre,
           'tipo' => $request->tipo,
           'descripcion' => $request->descripcion
        ]);

        return redirect()->back()->with('status', '¡Perro añadido!');
    }

    public function nuevoCachorro(Request $request)
    {
        Cachorro::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion
        ]);

        return Redirect::to(URL::previous() . "#cachorros");
    }
}
