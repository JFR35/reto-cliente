<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('direcciones')->insert([
            ['calle' => 'calle 1', 'numero' => '123', 'ciudad' => 'Madrid', 'comunidad' => 'Madrid', 'cp' => '28001', 'telefono' => '1234567890'],
            ['calle' => 'calle 2', 'numero' => '456', 'ciudad' => 'Barcelona', 'comunidad' => 'Cataluña', 'cp' => '08001', 'telefono' => '0987654321'],
            ['calle' => 'calle 3', 'numero' => '789', 'ciudad' => 'Valencia', 'comunidad' => 'Valencia', 'cp' => '46001', 'telefono' => '1230984567'],
        ]);
    }
}
