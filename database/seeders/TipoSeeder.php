<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo::create(['name' => 'Resolución']);
        Tipo::create(['name' => 'Declaración']);
        Tipo::create(['name' => 'Decretos']);
        Tipo::create(['name' => 'Minutas de Comunicación']);
    }
}
