<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $fillable = [
       'titulo',
       'imagen_pricipal',
       'categoria_id',
       'ubicacion_id',
       'modelo_id',
       'condicion_id',
       'precio',
       'millaje',
       'descripcion',
       'telefono',
       'apertura',
       'cierre',
       'uuid'
    ];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }


}
