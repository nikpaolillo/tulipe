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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $perros = Perro::all();
        $cachorros = Cachorro::all();

        return view('admin.index', ['perros' => $perros, 'cachorros' => $cachorros]);
    }

    public function nuevoPerro(Request $request)
    {
        $request->file('imagen')->store('public');

        $file_name = $request->file('imagen')->hashName();

        Perro::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,
            'imagen' => $file_name
        ]);

        return redirect()->back()->with('status', '¡Perro añadido!');
    }

    public function borrarPerro(Request $request)
    {
        $perro = Perro::where('id', $request->id)->delete();

        return $perro;
    }

    public function nuevoCachorro(Request $request)
    {
        $request->file('imagen')->store('public');

        $file_name = $request->file('imagen')->hashName();

        Cachorro::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,
            'imagen' => $file_name
        ]);

        return Redirect::to(URL::previous() . "#cachorros");
    }

    public function borrarCachorro(Request $request)
    {
        $cachorro = Cachorro::where('id', $request->id)->delete();

        return $cachorro;
    }
}
