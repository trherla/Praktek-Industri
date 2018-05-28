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
        \App\User::insert([
        	[
        		'name'=>'wide',
        		'email'=>'wide@gmail.com',
        		'password'=>'wide',
        		'status'=>'admin'
        	],
        	[
        		'name'=>'cottage',
        		'email'=>'cottage@gmail.com',
        		'password'=>'cottage',
        		'status'=>'user'
        	]
        ]);
    }
}
