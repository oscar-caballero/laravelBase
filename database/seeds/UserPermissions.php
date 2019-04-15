<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        Permission::create(['id' => 100, 'name' => 'accesar_web', 'guard_name' => 'web']);
         // Permisos API
        Permission::create(['id' => 200, 'name' => 'accesar_api', 'guard_name' => 'api']);
        //rol
        $rol = Role::create(['id' => 11, 'name' => 'superadmin', 'guard_name' => 'web']);
        $rol->syncPermissions(Permission::all());

        // Usuarios <-> Roles
        DB::table('model_has_roles')->insert([
            ['role_id' => 11, 'model_id' => 1, 'model_type' => 'App\User'],
        ]);

    }
}
