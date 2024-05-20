<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
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
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_USERS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_USERS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_USERS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_USERS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_RESET_PASSWORDS->value]);

        // create permissions for roles resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_ROLES->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_ROLES->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_ROLES->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_ROLES->value]);

        // create permissions for grade levels resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_GRADE_LEVELS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_GRADE_LEVELS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_GRADE_LEVELS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_GRADE_LEVELS->value]);

        // create permissions for sections resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_SECTIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_SECTIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_SECTIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_SECTIONS->value]);

        // create permissions for students resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_STUDENTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_STUDENTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_STUDENTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_STUDENTS->value]);

        // create permissions for divisions resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_DIVISIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_DIVISIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_DIVISIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_DIVISIONS->value]);

        // create permissions for teams resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_TEAMS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_TEAMS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_TEAMS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_TEAMS->value]);

        // create permissions for events resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_EVENTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_EVENTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_EVENTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_EVENTS->value]);

        // create permissions for categories resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_CATEGORIES->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_CATEGORIES->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_CATEGORIES->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_CATEGORIES->value]);

        // create permissions for locations resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_LOCATIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_LOCATIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_LOCATIONS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_LOCATIONS->value]);

        // create permissions for facilitators resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_FACILITATORS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_FACILITATORS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_FACILITATORS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_FACILITATORS->value]);

        // create permissions for points resource
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_CREATE_POINTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_READ_POINTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_UPDATE_POINTS->value]);
        Permission::query()->firstOrCreate(['name' => PermissionEnum::CAN_DELETE_POINTS->value]);
    }
}
