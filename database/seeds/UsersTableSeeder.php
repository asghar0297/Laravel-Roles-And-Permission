<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$fwndVI32ME8ux9/U8QUpouwkiG1sfyVl4KUXX3wA.A27CkvFtIoZy',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
