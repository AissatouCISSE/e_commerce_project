<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Isthiaka',
                'email' => 'isthiaka@gmail.com',
                'password' => bcrypt('password1'),
                'role_id' => 1,

            ],
            [

                'name' => 'Aissatou',
                'email' => 'aissatou@gmail.com',
                'password' => bcrypt('password1'),
                'role_id' => 2,

            ]
        ];

        DB::table('users')->insert($users);
    }
}
