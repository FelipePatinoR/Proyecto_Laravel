<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $materias = [
            [
                'codmateria' => '1',
                'nommateria' => 'Dibujo',
                'cremateria' => '4'

            ],
            [
                'codmateria' => '2',
                'nommateria' => 'Pintura',
                'cremateria' => '4'
            ],
            [
                'codmateria' => '3',
                'nommateria' => 'Musica',
                'cremateria' => '4'
            ],
            [
                'codmateria' => '4',
                'nommateria' => 'Economia',
                'cremateria' => '5'
            ],
            [
                'codmateria' => '5',
                'nommateria' => 'Contabilidad',
                'cremateria' => '5'
            ]
        ];
        DB::table('materias')->insert($materias);
    }
}