<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $admin->syncPermissions([
            'users.create',
            'users.read',
            'users.update',
            'users.delete',
            'users.resend-verification-email',
            'users.reset-password',
            'users.list-permissions',
            'roles.create',
            'roles.read',
            'roles.update',
            'roles.delete',
        ]);

        $role = Role::create(['name' => 'user-1']);
        $role = Role::create(['name' => 'user-2']);
        $role = Role::create(['name' => 'user-3']);
    }
}
