<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,20)->create();
        Role::create([
            'name'    => 'Administrador'
        ]);

        Role::create([
            'name'    => 'Gestor'
        ]);

        Role::create([
            'name'    => 'Cliente'
        ]);

        Permission::create([
            'name' => 'Navegar usuarios'
        ]);
        Permission::create([
            'name' => 'ver detalle de usuarios'
        ]);
        Permission::create([
            'name' => 'Editar usuarios'
        ]);
        Permission::create([
            'name' => 'Eliminar usuarios'
        ]);

    }
}
