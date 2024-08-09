<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $role_admin = Role::create(['name' => 'admin']);
        $role_noticia = Role::create(['name' => 'noticia']);
        $role_digesto = Role::create(['name' => 'digesto']);

        //Permissions

        $permission_create_noticia  = Permission::create(['name' => 'Crear noticia']);
        $permission_read_noticia    = Permission::create(['name' => 'Leer noticia']);
        $permission_update_noticia  = Permission::create(['name' => 'Actualizar noticia']);
        $permission_delete_noticia  = Permission::create(['name' => 'Eliminar noticia']);

        $permission_create_digesto  = Permission::create(['name' => 'Crear digesto']);
        $permission_read_digesto    = Permission::create(['name' => 'Leer digesto']);
        $permission_update_digesto  = Permission::create(['name' => 'Actualizar digesto']);
        $permission_delete_digesto  = Permission::create(['name' => 'Eliminar digesto']);

        $permissions_admin = [$permission_create_noticia,$permission_read_noticia,$permission_update_noticia,$permission_delete_noticia,$permission_create_digesto,$permission_read_digesto,$permission_update_digesto,$permission_delete_digesto];

        $permissions_noticia = [$permission_create_noticia,$permission_read_noticia,$permission_update_noticia,$permission_delete_noticia];

        $permissions_digesto = [$permission_create_digesto,$permission_read_digesto,$permission_update_digesto,$permission_delete_digesto];

        $role_admin->syncPermissions($permissions_admin);
        $role_noticia->syncPermissions($permissions_noticia);
        $role_digesto->syncPermissions($permissions_digesto);

    }
}
