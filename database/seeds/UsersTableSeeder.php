<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'id' => 1,
            'name' => 'Admin Owner',
            'email' => 'admin@minishop.com',
            'password' => bcrypt('admin'),
            'user_type' => 1,
        ]);
        $jaspher = User::create([
            'id' => 2,
            'name' => 'Customer',
            'email' => 'customer@minishop.com',
            'password' => bcrypt('customer'),
            'user_type' => 2,
        ]);
    }
}
