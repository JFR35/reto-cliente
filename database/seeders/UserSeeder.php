<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'juan', 'email' => 'juan@gmail.com', 'password' => '123', 'role_id' => 1],
            ['name' => 'mario', 'email' => 'mario@gmail.com', 'password' => '123', 'role_id' => 2],
            ['name' => 'lucia', 'email' => 'lucia@gmail.com', 'password' => '123', 'role_id' => 3],
        ]);
        
    }
}
