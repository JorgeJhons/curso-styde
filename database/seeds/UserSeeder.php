<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$profession=DB::table('professions')->select('id')->first();
        
        DB::table('users')->insert([
        	'name'=>'Jorge Jhons Ferdinam',
        	'email'=>'jfernandezcolli@gmail.com',
        	'password'=>bcrypt('houstonlabs3457y'),
        	'profession_id'=>$profession->id,

        ]);
    }
}
