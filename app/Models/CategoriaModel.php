<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $fillable = ['nombre_categoria'];

    // Relación: Una categoría tiene muchos productos
    public function productos()
    {
        return $this->hasMany(ProductoModel::class);  // Aquí se usaba mal el formato de comillas
    }
}
