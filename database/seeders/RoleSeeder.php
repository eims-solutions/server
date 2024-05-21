<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => RoleEnum::ADMIN->value]);
        $admin->syncPermissions(PermissionEnum::toArray());

        $levelOneOfficer = Role::create(['name' => RoleEnum::LEVEL_ONE_OFFICER->value]);
        $levelOneOfficer->syncPermissions(PermissionEnum::getManagerRolePermissions());

        $levelTwoOfficer = Role::create(['name' => RoleEnum::LEVEL_TWO_OFFICER->value]);

        $levelThreeOfficer = Role::create(['name' => RoleEnum::LEVEL_THREE_OFFICER->value]);

        $student = Role::create(['name' => RoleEnum::STUDENT->value]);
    }

    /**
     * Don't assign permissions to user. Assign permissions to role.
     * Assign role to user.
     */
}
