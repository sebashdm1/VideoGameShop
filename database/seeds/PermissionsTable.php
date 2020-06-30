<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'admin.users.index ',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'ver detalle del usuario',
            'slug' => 'admin.users.show ',
            'description' => 'Ver en detalle cada usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de usuarios',
            'slug' => 'admin.users.edit ',
            'description' => 'Editar cualquier dato los usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'admin.users.destroy ',
            'description' => 'Eliminar cualquier dato los usuarios del sistema',
        ]);

        //Roles

        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index ',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle del rol',
            'slug' => 'roles.show ',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de roles',
            'slug' => 'roles.create ',
            'description' => 'Editar cualquier dato los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de rol',
            'slug' => 'roles.edit ',
            'description' => 'Editar cualquier dato los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy ',
            'description' => 'Eliminar cualquier dato los roles del sistema',
        ]);

        //productos

        Permission::create([
            'name' => 'Navegar  productos',
            'slug' => 'products.index ',
            'description' => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de productos',
            'slug' => 'products.show ',
            'description' => 'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de  productos',
            'slug' => 'products.create',
            'description' => 'Editar cualquier dato los productos del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de productos',
            'slug' => 'products.edit ',
            'description' => 'Editar cualquier dato los productos del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar productos',
            'slug' => 'products.destroy ',
            'description' => 'Eliminar cualquier dato los productos del sistema',
        ]);

    }
}
