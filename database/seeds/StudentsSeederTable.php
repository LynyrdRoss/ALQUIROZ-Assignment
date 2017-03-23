<?php

use Illuminate\Database\Seeder;

class StudentsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i < 1; $i++)
    	{
    		echo $i;
	    	DB::table('students')->insert([
	    		'first_name' => str_random(6),
	    		'last_name' => str_random(5),
	    		'program' => 'BS ' . str_random(5),
	    		'age' => random_int(16, 33)
	    	]);
    	}
    }
}
