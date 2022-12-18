<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
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
                'name' => 'admin',
                'password' => bcrypt('admin'),
                'email' => 'admin@gmail.com',
                'role' => "admin",
                'email_verified_at' => now(),
            ],
        ];

        foreach($users as $user) {
            User::create($user)->assignRole('admin');
        }
    }
}
