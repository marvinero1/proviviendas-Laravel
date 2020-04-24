<?php

use Illuminate\Database\Seeder;
use proviviendas\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->role="administrador";
        $role->save();

        $role = new Role();
        $role->role="usuario";
        $role->save();

        $role = new Role();
        $role->role="cliente";
        $role->save();
    }
}
