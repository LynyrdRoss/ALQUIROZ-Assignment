<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users_count = DB::table('users')->count();

    	for ($i = 0; $i < 100; $i++)
    	{
    		echo $i;
	    	DB::table('contacts')->insert([
	    		'full_name' => str_random(5) . ' ' . str_random(4),
	    		'phone' => random_int(10000, 99999),
	    		'user_id' => random_int(1, $users_count)
	    	]);
    	}
    }
}
