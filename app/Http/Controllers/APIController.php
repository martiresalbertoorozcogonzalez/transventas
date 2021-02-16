<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Publicacion;
use Illuminate\Http\Request;

class APIController extends Controller
{
    //Metodo para obtener todas las categorias
    public function categorias()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    //Muestra los establecimientos de la categoria en especifico
    public function categoria(Categoria $categoria)
    {

        $publicaciones = Publicacion::where('categoria_id', $categoria->id)->with('categoria')->get();

        return response()->json($publicaciones);
    }
}
