<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
      $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin123'),
        'role_id' => 1,
      ]);
      $admin->assignRole('Admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'role_id' => 2,
        ]);
        $user->assignRole('User');
    }
}
