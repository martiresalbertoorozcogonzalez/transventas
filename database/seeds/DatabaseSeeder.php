<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(CondicionSeeder::class);
        $this->call(ModeloSeeder::class);
    }
}
