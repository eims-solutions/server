<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(20)->create();
        foreach ($users as $user) {
            $user->syncRoles([RoleEnum::STUDENT->value, RoleEnum::LEVEL_TWO_OFFICER->value]);
        }
    }
}
