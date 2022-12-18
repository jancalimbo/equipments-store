<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
        // these are admin users
        $users = [
            [
                'name' => 'Camille Rico',
                'password' => bcrypt('customer'),
                'email' => 'customer@gmail.com',
                'email_verified_at' => now(),
                'role' => "customer",
            ],

        ];

        foreach($users as $user) {
            User::create($user)->assignRole('customer');
        }
    }
}
