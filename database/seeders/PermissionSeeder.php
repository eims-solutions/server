<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedPermissions();
    }

    protected function seedPermissions(): void
    {
        // create permissions for users resource
        Permission::query()->firstOrCreate(['name' => 'users.create']);
        Permission::query()->firstOrCreate(['name' => 'users.read']);
        Permission::query()->firstOrCreate(['name' => 'users.update']);
        Permission::query()->firstOrCreate(['name' => 'users.delete']);
        Permission::query()->firstOrCreate(['name' => 'users.resend-verification-email']);
        Permission::query()->firstOrCreate(['name' => 'users.reset-password']);
        Permission::query()->firstOrCreate(['name' => 'users.list-permissions']);

        // create permissions for roles resource
        Permission::query()->firstOrCreate(['name' => 'roles.create']);
        Permission::query()->firstOrCreate(['name' => 'roles.read']);
        Permission::query()->firstOrCreate(['name' => 'roles.update']);
        Permission::query()->firstOrCreate(['name' => 'roles.delete']);
    }
}
