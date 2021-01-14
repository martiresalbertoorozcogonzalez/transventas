<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('condicions')->insert([
            'nombre' => 'Usado',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('condicions')->insert([
            'nombre' => 'Semi Nuevo',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
    }
}
