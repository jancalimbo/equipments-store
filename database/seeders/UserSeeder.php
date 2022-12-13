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
                'name' => 'Dany Restavo',
                'password' => bcrypt('customer'),
                'email' => 'danyrestavo@gmail.com',
                'email_verified_at' => now()
            ],
            [
                'name' => 'Charles Saltzman',
                'password' => bcrypt('customer'),
                'email' => 'charlessaltzman@yahoo.com',
                'email_verified_at' => now()
            ],
            [
                'name' => 'Floyd Goody',
                'password' => bcrypt('customer'),
                'email' => 'floydgoody@yahoo.com',
                'email_verified_at' => now()
            ],

        ];

        foreach($users as $user) {
            User::create($user)->assignRole('customer');
        }
    }
}
