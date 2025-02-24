<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email', 'direccion_id'];

    // Relacion con direccion 1:1 una direccion solo pertenece a 1 cliente
    public function direccion(){
        return $this->hasOne(DireccionModel::class);
    }
    // Relacion con pedidos 1:N un cliente puede tener muchos pedidos
    public function pedidos(){
        return $this->hasMany(PedidoModel::class);
    }
}
