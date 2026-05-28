<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Создание разрешения
        Permission::firstOrCreate(["name"=> "admin.*"]);

        // Создание роли
        Role::firstOrCreate(["name"=> "admin"])
            // Присвоение разрешения
            ->givePermissionTo("admin.*");

        // Создание админа, если его нет
        User::firstOrCreate([
            'email' => 'admin@localhost.com',
        ], [
            'name' => 'admin',
            'password' => Hash::make('12345678'),
        ])
            // Присвоение роли
            ->assignRole('admin');
    }
}
