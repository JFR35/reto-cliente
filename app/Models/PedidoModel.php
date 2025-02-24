<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $fillable = ['estado', 'total', 'fecha_realizacion', 'cliente_id'];

    // Relacion 1:1 con cliente 1 pedido pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(ClienteModel::class);
    }
    // Relacion 1:N con detalle_pedidos 1 pedido puede tener muchos detalles
    public function detalle_pedidos()
    {
        return $this->hasMany(DetallePedidos::class);
    }
}
