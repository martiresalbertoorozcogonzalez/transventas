<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categorias')->insert([
            'nombre' => 'Cabezal',
            'slug' => 'Cabezal',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Camion',
            'slug' => 'Camion',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Furgon',
            'slug' => 'Furgon',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Carro',
            'slug' => 'Carro',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Pickup',
            'slug' => 'Pickup',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Moto',
            'slug' => 'Moto',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

    }
}
