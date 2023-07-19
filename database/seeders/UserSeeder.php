<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
        {
            $user = [
                ['username' =>'stema',
                'firstname' => 'Stema',
                'lastname' =>'Team',
                'email'=>'stema5240@gmail.com',
                'nationalid' =>'30005201205626',
                'gender' =>'female',
                'image' =>'£££',
                'password'=> bcrypt('12345'),
                'role_id'=>'1']
            ];

            foreach ($user as $key => $value) {
                User::create($value);
            }
        }
}
