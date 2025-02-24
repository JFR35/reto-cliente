<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePedidos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_pedidos')->insert([
           [ 'cantidad' => 1,
            'precio_total' => 100.00,
            'pedido_id' => 1,
            'producto_id' => 1,
        ],
        [
            'cantidad' => 2,
            'precio_total' => 200.00,
            'pedido_id' => 2,
            'producto_id' => 2,
        ],
        [
            'cantidad' => 3,
            'precio_total' => 300.00,
            'pedido_id' => 3,
            'producto_id' => 3,
        ],
        
        ]);
    }
}
