<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Se ingresan los primeras profesiones.

        DB::table('professions')->insert([
        	'title'=>'Desarrollador - BackEnd',
        ]);
   
        DB::table('professions')->insert([
            'title'=>'Desarrollador - FrontEnd',
        ]);

        DB::table('professions')->insert([
            'title'=>'Desarrollador - DiseñadorWEB',
        ]);
    }
}
