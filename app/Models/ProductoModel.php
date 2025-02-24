<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    protected $table = 'productos'; // Define explícitamente la tabla correcta

    protected $fillable = ['nombre_producto', 'descripcion', 'precio', 'categoria_id'];

    // Relación: Un producto pertenece a una categoría
    public function categoria(){
        return $this->belongsTo(CategoriaModel::class);
    }

}
