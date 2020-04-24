<?php

use Illuminate\Database\Seeder;
use proviviendas\Role;
use proviviendas\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','usuario')->first();
        $role_admin = Role::where('name','administrador')->first();
        $role_admin = Role::where('cliente','cliente')->first();

        $user= new User();
        $user->name="User";
        $user->save();
        $user->roles()->attach($role_user);

    }
}
