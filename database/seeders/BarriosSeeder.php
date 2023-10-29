<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $barrios = [
            [
                'codbarrio' => '11',
                'nombarrio' => 'El Poblado',
                'estbarrio' => '2',
                'comuna' => '1'


            ],
            [
                'codbarrio' => '22',
                'nombarrio' => 'El Centro',
                'estbarrio' => '2',
                'comuna' => '1'
            ],
            [
                'codbarrio' => '33',
                'nombarrio' => 'Bocagrande ',
                'estbarrio' => '2',
                'comuna' => '2'
            ],
            [
                'codbarrio' => '44',
                'nombarrio' => 'La Candelaria',
                'estbarrio' => '2',
                'comuna' => '2'
            ],
            [
                'codbarrio' => '55',
                'nombarrio' => 'El Cable',
                'estbarrio' => '2',
                'comuna' => '3'
            ]
        ];
        DB::table('barrios')->insert($barrios);
    }
}
