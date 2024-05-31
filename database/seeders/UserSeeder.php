<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@cineabc.com',
            'password' => bcrypt('admin')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Cliente',
            'email' => 'client@cineabc.com',
            'password' => bcrypt('cliente'),
        ])->assignRole('Cliente');
    }
}
