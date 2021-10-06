<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
  public function run()
  {
      Role::create(['name' => 'Super Admin']);
  }
}
