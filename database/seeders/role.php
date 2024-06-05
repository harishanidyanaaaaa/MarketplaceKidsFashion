<?php

namespace Database\Seeders;

use App\Models\Role as ModelsRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as PermissionModelsRole;

class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'show-user']);
        Permission::create(['name' => 'tambah-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'hapus-role']);

        PermissionModelsRole::create(['name' => 'Admin']);
        PermissionModelsRole::create(['name' => 'User']);

        $roleAdmin = PermissionModelsRole::findByName('Admin');
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('show-user');

        $roleUser = PermissionModelsRole::findByName('User');
        $roleUser->givePermissionTo('show-user');
        $roleUser->givePermissionTo('edit-user');
    }
}
