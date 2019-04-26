<?php

use Illuminate\Database\Seeder;
use App\Contracts\Constant;

use App\Models\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create([
            'id' => 1,
            'title' => 'SUPER ADMIN',
            'status' => Constant::STATUS_INTEGER_ACTIVE
        ]);
        UserType::create([
            'id' => 2,
            'title' => 'User',
            'status' => Constant::STATUS_INTEGER_ACTIVE
        ]);
    }
}
