<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ciudades = [
            [
                'codciudad' => '100',
                'nomciudad' => 'Medellin',
                'departamento' => '01'

            ],
            [
                'codciudad' => '200',
                'nomciudad' => 'barranquilla',
                'departamento' => '02'

            ],
            [
                'codciudad' => '300',
                'nomciudad' => 'Bogotá',
                'departamento' => '03'

            ],
            [
                'codciudad' => '400',
                'nomciudad' => 'Cartagena',
                'departamento' => '04'

            ],
            [
                'codciudad' => '500',
                'nomciudad' => 'Pasto',
                'departamento' => '05'

                
            ]
        ];
        DB::table('ciudades')->insert($ciudades);
    }
}
