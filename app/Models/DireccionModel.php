<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DireccionModel extends Model
{
    protected $fillable = ['calle', 'numero', 'ciudad', 'comunidad', 'cp', 'telefono'];

    // Relacion con cliente 1:1 una direccion solo pertenece a 1 cliente
    public function cliente(){
        return $this->belongsTo(ClienteModel::class);
    }
}
