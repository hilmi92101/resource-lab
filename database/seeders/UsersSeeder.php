<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

		$collection = [];
		for ($x = 0; $x < 20; $x++) {
			$id = $x + 1;
    		$data = [
                
	            'username' => $faker->userName,
	            'email' => $faker->email,
	            'password' => \Hash::make('qawsedrf'.$id),
	            'created_at' => date('Y-m-d H:i:s'),
	            'updated_at' => date('Y-m-d H:i:s'),
	        ];
	        array_push($collection, $data);
		}
        
        User::insert($collection);
    }
}
