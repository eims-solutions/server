<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Contracts\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $admin->syncPermissions(PermissionEnum::toArray());

        $levelOneOfficer = Role::create(['name' => 'Level One Officer']);
        $levelOneOfficer->syncPermissions(PermissionEnum::getManagerRolePermissions());

        $levelTwoOfficer = Role::create(['name' => 'Level Two Officer']);

        $levelThreeOfficer = Role::create(['name' => 'Level Three Officer']);

        $student = Role::create(['name' => 'Student']);
    }

    /**
     * Don't assign permissions to user. Assign permissions to role.
     * Assign role to user.
     */
}
