<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i <= 399; $i++)
    	{
    		echo $i;
	        DB::table('users')->insert([
	        	'name' => str_random(10),
	        	'email' => str_random(6) . '@' . random_int(100, 999) . '.com',
	        	'password' => bcrypt('secret')
	        ]);
    	}
    }
}