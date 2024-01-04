<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     static $names = [
        'Afetividade',
        'Aprendizado',
        'Cognição',
        'Coordenação Motora',
        'Criatividade',
        'Ideias Divertidas',
        'Imaginação',
        'Raciocínio Lógico',
        'Responsabilidade'
    ];

    public function run(): void
    {
        foreach (self::$names as $name) {
            DB::table('tipos')->insert([
                'name' => $name
            ]);
        }
    }
}
