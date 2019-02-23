<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->role = "Admin";
        $role->save();

        $role = new Role;
        $role->role = "User";
        $role->save();

        $role = new Role;
        $role->role = "Agen";
        $role->save();
    }
}
