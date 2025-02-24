<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedidos extends Model
{
    protected $fillable = ['cantidad', 'precio', 'pedido_id', 'producto_id'];

    // Relacion 1:1 con pedido 1 detalle pertenece a un pedido
    public function pedido()
    {
        return $this->belongsTo(PedidoModel::class);
    }
    // Relacion 1:1 con producto 1 detalle pertenece a un producto	
    public function producto()
    {
        return $this->belongsTo(ProductoModel::class);
    }
}
