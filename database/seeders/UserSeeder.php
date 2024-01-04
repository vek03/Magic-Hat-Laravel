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
            'isAdmin' => false,
            'name' => 'Victor',
            'lastname' => 'Roma',
            'email' => 'fox@gmail.com',
            'password' => Hash::make('12345678'),
            'address' => 'Rua Fagundes',
            'number' => 69,
            'cep' => '08485-200',
            'city' => 'São Paulo',
            'district' => 'São Paulo',
            'state' => 'SP',
        ]);
    }
}
