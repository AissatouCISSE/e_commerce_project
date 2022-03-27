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
                'numtel' => 777739260

            ],
            [

                'name' => 'Aissatou',
                'email' => 'aissatou@gmail.com',
                'password' => bcrypt('password1'),
                'role_id' => 2,
                'numtel' => 772360279
            ]
        ];

        DB::table('users')->insert($users);
    }
}
