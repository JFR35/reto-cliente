<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            ['nombre' => 'juan', 'apellido' => 'Fajardo', 'direccion_id' => 1],
            ['nombre' => 'mario', 'apellido' => 'Fajardo', 'direccion_id' => 2],
            ['nombre' => 'lucia', 'apellido' => 'Fajardo', 'direccion_id' => 3],
        ]);
    }
}
