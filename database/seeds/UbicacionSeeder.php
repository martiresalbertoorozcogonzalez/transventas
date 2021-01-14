<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ubicacions')->insert([
            'nombre' => 'Guatemala',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Alta Verapaz',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Baja Verapaz',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Chimaltenango',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Chiquimula',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'El Progreso',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Escuintla',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Huehuetenango',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Izabal',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Jalapa',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Jutiapa',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Peten',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Quetzaltenango',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Quiche',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Retalhuleu',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Sacatepequez',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'San Marcos',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Santa Rosa',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Solola',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Suchitepequez',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Totonicapan',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicacions')->insert([
            'nombre' => 'Zacapa',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
    }
}
