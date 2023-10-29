<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $programas = [
            [
                'codprograma' => '11',
                'nomprograma' => 'Licenciatura en Artes Plásticas',
                'facultad' => '10'
            ],
            [
                'codprograma' => '12',
                'nomprograma' => '	Licenciatura en Música',
                'facultad' => '10'
            ],
            [
                'codprograma' => '21',
                'nomprograma' => 'Administración de Empresas',
                'facultad' => '20'
            ],
            [
                'codprograma' => '22',
                'nomprograma' => 'Contaduría Pública',
                'facultad' => '20'
            ],
            [
                'codprograma' => '31',
                'nomprograma' => 'Ingeniería de Sistemas',
                'facultad' => '30'
            ]
        ];
        DB::table('programas')->insert($programas);
    }
}
