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
        $role = new Role();
        $role->name = "User";
        $role->description = "A normal user";
        $role->save();

        $role_2 = new Role();
        $role_2->name = "Author";
        $role_2->description = "An author";
        $role_2->save();

        $role_3 = new Role();
        $role_3->name = "Administrator";
        $role_3->description = "An administrator";
        $role_3->save();
    }
}
