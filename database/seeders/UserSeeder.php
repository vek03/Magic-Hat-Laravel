<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMIN
        DB::table('users')->insert([
            'isAdmin' => true,
            'name' => 'Victor',
            'lastname' => 'Cardoso',
            'email' => 'vek@gmail.com',
            'password' => Hash::make('12345678'),
        ]);


        //CLIENTE
        DB::table('users')->insert([
            'id_category' => 1,
            'name' => 'Victor',
            'lastname' => 'Roma',
            'email' => 'fox@gmail.com',
            'password' => Hash::make('12345678'),
            'address' => 'Rua Dom Marcos Barbosa',
            'number' => 69,
            'extra' => 'Apto 21A',
            'cep' => '08485-200',
            'city' => 'São Paulo',
            'district' => 'Conjunto Habitacional Santa Etelvina II',
            'state' => 'SP',
        ]);
    }
}
