<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->delete();
        DB::table('productos')->insert([
            ['nombre_producto' => 'Café colombiano', 'descripcion' => 'Café de Colombia', 'precio' => 5, 'categoria_id' => 1,'img' => 'img/cafes/cafecolombia.webp'],  // Ruta de la imagen        ],
            ['nombre_producto' => 'Café guatemalteco', 'descripcion' => 'Café de Guatemala', 'precio' => 8, 'categoria_id' => 1, 'img' => 'img/cafes/cafecolombia.webp'],
            ['nombre_producto' => 'Té verde', 'precio' => 3, 'descripcion' => 'Té verde', 'categoria_id' => 2, 'img' => 'img/cafes/cafecolombia.webp'],
        ]);
    }
}
