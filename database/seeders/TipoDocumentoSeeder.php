<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;
class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDocumento::firstOrCreate([
            'tipo' => '01', 'nombre_corto' => 'D.N.I / L.E.',
            'nombre_largo' => 'D.N.I. / Libreta Electoral',
            'longitud' => 8
        ]);
        TipoDocumento::firstOrCreate([
            'tipo' => '04', 'nombre_corto' => 'CARNET EXT.',
            'nombre_largo' => 'Carnét de Extranjería',
            'longitud' => 12
        ]);
        TipoDocumento::firstOrCreate([
            'tipo' => '06', 'nombre_corto' => 'R.U.C.',
            'nombre_largo' => 'Régimen Único del Contribuyente',
            'longitud' => 11
        ]);
        TipoDocumento::firstOrCreate([
            'tipo' => '07', 'nombre_corto' => 'PASAPORTE',
            'nombre_largo' => 'PASAPORTE',
            'longitud' => 12
        ]);
        TipoDocumento::firstOrCreate([
            'tipo' => '11', 'nombre_corto' => 'PARTIDA NAC.',
            'nombre_largo' => 'Partida de Nacimiento - Identidad',
            'longitud' => 15
        ]);
        TipoDocumento::firstOrCreate([
            'tipo' => '00', 'nombre_corto' => 'OTROS',
            'nombre_largo' => 'OTROS',
            'longitud' => 15
        ]);
    }
}
