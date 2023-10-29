<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departamentos = [
            [
                'coddepto' => '01',
                'nomdepto' => 'Antioquia'
            ],
            [
                'coddepto' => '02',
                'nomdepto' => 'Atlántico'
            ],
            [
                'coddepto' => '03',
                'nomdepto' => 'Cundinamarca'
            ],
            [
                'coddepto' => '04',
                'nomdepto' => 'Bolívar'
            ],
            [
                'coddepto' => '05',
                'nomdepto' => 'Nariño'
            ]
        ];
        DB::table('departamentos')->insert($departamentos);
    }
}
