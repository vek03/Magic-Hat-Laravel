<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    static $names = [
        'Princesas',
        'Carrinhos',
        'Bonecos',
        'Heróis',
        'Jogos',
        'Bonecas'
    ];

    public function run(): void
    {
        foreach (self::$names as $name) {
            DB::table('categorias')->insert([
                'name' => $name
            ]);
        }
    }
}