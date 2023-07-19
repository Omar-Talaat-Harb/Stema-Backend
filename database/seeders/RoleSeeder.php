<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $role = [
            [
                'type' => 'admin'
            ],
            [
                'type' => 'doctor'
            ],
            [
                'type' => 'nurse'
            ]
            ];

            foreach ($role as $key => $value) {
                Role::create($value);
            }
    }
}
