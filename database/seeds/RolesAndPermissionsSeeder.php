<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'user list']);
        Permission::create(['name' => 'user create']);
        Permission::create(['name' => 'user edit']);
        Permission::create(['name' => 'user delete']);

        Permission::create(['name' => 'product list']);
        Permission::create(['name' => 'product create']);
        Permission::create(['name' => 'product edit']);
        Permission::create(['name' => 'product delete']);

        Permission::create(['name' => 'articles publish']);
        Permission::create(['name' => 'articles unpublish']);


        // create roles and assign created permissions

        /*$role = Role::create(['name' => 'super admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(['articles publish', 'articles unpublish']);*/

        $role = Role::create(['name' => 'seller']);
        $role->givePermissionTo(['product list', 'product create','product edit']);
    }
}
