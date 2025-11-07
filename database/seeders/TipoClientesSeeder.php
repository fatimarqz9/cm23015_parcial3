<?php

namespace Database\Seeders;

use App\Models\TipoClientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TipoClientes::factory()->count(10)->create();
    }
}
