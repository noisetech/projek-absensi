<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $user =  User::create([
                'name' => 'roby',
                'email' => 'roby@gmail.com',
                'password' => bcrypt('password')
            ]);

            $role = Role::find(2);
            $permissions = Permission::all();

            $role->syncPermissions($permissions);

        // assign role with permission to user
        $user = User::find(3);

        DB::table('karyawan')->where('id', 2)->update([
            'users_id' => 3
        ]);
        $user->assignRole($role->name);


    }
}
