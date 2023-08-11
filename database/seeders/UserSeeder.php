<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->user_name = 'admin';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
