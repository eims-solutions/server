<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::query()
            ->firstOrCreate([
                'first_name' => "add",
                'middle_name' => "min",
                'last_name' => "admin",
                'description' => "administrator",
                'contact' => "+0542885",
                'email' => 'admin@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]);

        $adminUser->assignRole(RoleEnum::ADMIN->value);

        $user1 = User::query()
            ->firstOrCreate([
                'first_name' => "user",
                'middle_name' => "number",
                'last_name' => "one",
                'description' => "user1",
                'contact' => "+02784652",
                'email' => 'user1@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]);

        $user1->assignRole(RoleEnum::LEVEL_ONE_OFFICER->value);

        $user2 = User::query()
            ->firstOrCreate([
                'first_name' => "user",
                'middle_name' => "number",
                'last_name' => "two",
                'description' => "user2",
                'contact' => "+6480973",
                'email' => 'user2@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]);

        $user2->assignRole(RoleEnum::LEVEL_TWO_OFFICER->value);

        $user3 = User::query()
            ->firstOrCreate([
                'first_name' => "user",
                'middle_name' => "number",
                'last_name' => "three",
                'description' => "user3",
                'contact' => "+98325143",
                'email' => 'user3@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]);

        $user3->assignRole(RoleEnum::LEVEL_THREE_OFFICER->value);

        // DB::table('users')->insert([
        //     'name' => "admin",
        //     'name' => "admin",
        //     'name' => "admin",
        //     'name' => "admin",
        //     'name' => "admin",
        //     'email' => 'admin@admin.com',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => "user-1",
        //     'name' => "user-1",
        //     'name' => "user-1",
        //     'name' => "user-1",
        //     'name' => "user-1",
        //     'email' => 'user1@gmail.com',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => "user-2",
        //     'name' => "user-2",
        //     'name' => "user-2",
        //     'name' => "user-2",
        //     'name' => "user-2",
        //     'email' => 'user2@gmail.com',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => "user-3",
        //     'name' => "user-3",
        //     'name' => "user-3",
        //     'name' => "user-3",
        //     'name' => "user-3",
        //     'email' => 'user3@gmail.com',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        // ]);
    }
}
