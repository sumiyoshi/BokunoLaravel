<?php

namespace Seeder;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        \DB::table('users')
            ->insert(
                [
                    'name' => 'Admin',
                    'email' => 'admin',
                    'password' => password_hash('password', PASSWORD_DEFAULT),
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
    }
}