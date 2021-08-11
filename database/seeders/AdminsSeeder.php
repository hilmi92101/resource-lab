<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
		$admin = [
            'username' => 'superadmin',
            'password' => \Hash::make('qawsedrf1'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        array_push($data, $admin);

        $admin = [
            'username' => 'devadmin',
            'password' => \Hash::make('qawsedrf2'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        array_push($data, $admin);

        Admin::insert($data);
    }
}
