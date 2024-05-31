<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::where('name', '=', 'Administrador')->first();
        $client = Role::where('name', '=', 'Cliente')->first();

        Permission::create(['name' => 'administration'])->syncRoles([$admin]);
        Permission::create(['name' => 'client'])->syncRoles([$client]);
    }
}
