<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'lihat user',
        ]);
        Permission::create([
            'name' => 'tambah user',
        ]);
        Permission::create([
            'name' => 'edit user',
        ]);
        Permission::create([
            'name' => 'hapus user',
        ]);
    }
}
