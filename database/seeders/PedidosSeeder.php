<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedidos')->insert([
            ['estado' => 'Enviado',
            'total' => 100.00,
            'fecha_realizacion' => '2025-02-24 08:56:36',
            'cliente_id' => 1,
            ],
            ['estado' => 'Enviado',
            'total' => 200.00,
            'fecha_realizacion' => '2025-02-24 08:56:36',
            'cliente_id' => 2,
            ],
            ['estado' => 'Enviado',
            'total' => 300.00,
            'fecha_realizacion' => '2025-02-24 08:56:36',
            'cliente_id' => 3,
            ]
        ]);
    }
}
