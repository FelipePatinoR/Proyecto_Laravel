<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DecanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $decanos = [
            [
                'coddecano' => '11',
                'nomdecano' => 'Juan Pérez',
                'facultad' => '10'
            ],
            [
                'coddecano' => '21',
                'nomdecano' => 'María García',
                'facultad' => '20'
            ],
            [
                'coddecano' => '31',
                'nomdecano' => 'Pedro López',
                'facultad' => '30'
            ],
            [
                'coddecano' => '41',
                'nomdecano' => 'Ana Rodríguez',
                'facultad' => '40'
            ],
            [
                'coddecano' => '51',
                'nomdecano' => 'Carlos Sánchez',
                'facultad' => '50'
            ],
            [
                'coddecano' => '61',
                'nomdecano' => 'Julian Salazar',
                'facultad' => '60'
            ]
        ];
        DB::table('decanos')->insert($decanos);
    }
}
