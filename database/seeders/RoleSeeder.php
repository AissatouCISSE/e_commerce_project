<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'libelle' => 'Admin',
                'code_role' => 'Ad1',

            ],
            [
                'libelle' => 'Client',
                'code_role' => 'Cl1',

            ]
        ];

        foreach($roles as $key => $value){
            Role::create($value);
        }
    }
}
