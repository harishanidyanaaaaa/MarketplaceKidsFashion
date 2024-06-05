<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'delete']);
    }
}
