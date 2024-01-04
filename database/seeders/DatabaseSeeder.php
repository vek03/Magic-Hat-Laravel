<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TipoSeeder::class);

        $this->call(CategoriaSeeder::class);

        $this->call(ProdutoSeeder::class);

        $this->call(UserSeeder::class);

        //$this->call(CarrinhoSeeder::class);

        //$this->call(CompraSeeder::class);

        //$this->call(ItemCompraSeeder::class);
    }
}
