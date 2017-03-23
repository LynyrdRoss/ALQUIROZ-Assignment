<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users_count = DB::table('users')->count();

    	for ($i = 0; $i < 200; $i++)
    	{
    		echo $i;
	        DB::table('orders')->insert([
	        	'item' => 'item ' . str_random(5),
	        	'price' => random_int(1000, 99999),
	        	'user_id' => random_int(1, $users_count)
	        ]);
    	}
    }
}
