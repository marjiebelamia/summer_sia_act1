<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
                'name'=> 'Marjie Belamia',
                'email'=> 'marjie@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'John Doe',
                'email'=> 'doe@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('doe123456')
            ],

            [
                'name'=> 'Jores Smith',
                'email'=> 'kik@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('jores123456')
            ],
            [
                'name'=> 'Keth Doe',
                'email'=> 'gray@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('keth12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
