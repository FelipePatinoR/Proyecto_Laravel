<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $estudiantes = [
            [
                'codestudiantes' => '1001',
                'nomestudiantes' => '',
                'edaestudiantes' => '',
                'fechestudiantes' => '',
                'sexestudiantes' => '',
                'ciudad' => '',
                'barrio' => '',
                'programa' => ''
            ],
            [
                'codestudiantes' => '1002',
                'nomestudiantes' => '',
                'edaestudiantes' => '',
                'fechestudiantes' => '',
                'sexestudiantes' => '',
                'ciudad' => '',
                'barrio' => '',
                'programa' => ''
            ],
            [
                'codestudiantes' => '1003',
                'nomestudiantes' => '',
                'edaestudiantes' => '',
                'fechestudiantes' => '',
                'sexestudiantes' => '',
                'ciudad' => '',
                'barrio' => '',
                'programa' => ''
            ],
            [
                'codestudiantes' => '1004',
                'nomestudiantes' => '',
                'edaestudiantes' => '',
                'fechestudiantes' => '',
                'sexestudiantes' => '',
                'ciudad' => '',
                'barrio' => '',
                'programa' => ''
            ],
            [
                'codestudiantes' => '1005',
                'nomestudiantes' => '',
                'edaestudiantes' => '',
                'fechestudiantes' => '',
                'sexestudiantes' => '',
                'ciudad' => '',
                'barrio' => '',
                'programa' => ''
            ]
        ];
        DB::table('estudiantes')->insert($estudiantes);
    }
}
