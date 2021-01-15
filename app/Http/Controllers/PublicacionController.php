<?php

namespace App\Http\Controllers;

use App\User;
use App\Modelo;
use App\Categoria;
use App\Condicion;
use App\Ubicacion;
use App\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PublicacionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '=', auth()->id())->get();
        $categorias = Categoria::all();
        $condicion = Condicion::all();
        $modelo = Modelo::all();
        $ubicacion = Ubicacion::all();

        return view('publicaciones.create', compact('ubicacion','modelo','condicion','categorias','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
           'titulo' => 'required',
           'imagen_principal' => 'required|image|max:1000',
           'category_id' => 'required|exists:App\Categoria,id',
           'ubicacion_id' => 'required|exists:App\Ubicacion,id',
           'condicion_id' => 'required|exists:App\Condicion,id',
           'modelo_id' => 'required|exists:App\Modelo,id',
           'precio' => 'required|numeric',
           'millaje' => 'required|numeric',
           'descripcion' => 'required|min:50',
           'telefono' => 'required|numeric',
           'apertura' => 'date_format:H:i',
           'cierre' => 'date_format:H:i|after:apertura',
           'uuid' => 'required|uuid'
        ]);

        //Guardar la imagen
        $ruta_imagen = $request['imagen_principal']->store('principales', 'public');
        $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(800,600);

        $img->save();

        $publicacion = new Publicacion($data);
        $publicacion->imagen_principal = $ruta_imagen;
        $publicacion->user_id = auth()->user()->id;
        $publicacion->save();

        return back()->with('estado','Tu informacion ha sido guardada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        return 'Desde edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacion $publicacion)
    {
        //
    }


}

