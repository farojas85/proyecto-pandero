<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Sexo;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sexo::firstOrCreate(['nombre' => 'Mujer']);
        Sexo::firstOrCreate(['nombre' => 'Varon']);
        Sexo::firstOrCreate(['nombre' => 'N/D']);
    }
}
