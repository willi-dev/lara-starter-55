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
      $role_admin = Role::where('name', 'admin')->first();
      $role_user = Role::where('name', 'user')->first();

      $admin = new User();
      $admin->name = 'Superadmin';
      $admin->email = 'admin@app.com';
      $admin->password = bcrypt('123456');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $user = new User();
      $user->name = 'User';
      $user->email = 'user@user.com';
      $user->password = bcrypt('123456');
      $user->save();
      $user->roles()->attach($role_user);

    }
}
