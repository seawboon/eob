<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

     public function run()
     {
         $user = User::create([
             'name' => 'Giggs Yeap',
             'email' => 'seawboon.yeap@gmail.com',
             'password' => Hash::make('Wsk.5744')
         ]);

         $role = Role::find(1);

         $permissions = Permission::pluck('id', 'id')->all();

         $role->syncPermissions($permissions);

         $user->assignRole([$role->id]);
     }

}
