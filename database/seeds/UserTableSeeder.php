<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin = Role::where('name', 'Administrator')->first();


        $user = new User();

        $user->name = 'Victor';
        $user->email = 'user@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);


        $user_2 = new User();
        $user_2->name = 'Victor2';
        $user_2->email = 'author@example.com';
        $user_2->password = bcrypt('visitor');
        $user_2->save();
        $user_2->roles()->attach($role_author);

        $user_3 = new User();
        $user_3->name = 'Victor3';
        $user_3->email = 'administrator@example.com';
        $user_3->password = bcrypt('visitor');
        $user_3->save();
        $user_3->roles()->attach($role_admin);

    }
}
