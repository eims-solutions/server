<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            GradeLevelSeeder::class,
            SectionSeeder::class,
            StudentSeeder::class,
            DivisionSeeder::class,
            TeamSeeder::class,
            EventSeeder::class,
            CategorySeeder::class,
            LocationSeeder::class,
            FacilitatorSeeder::class,
            PointSeeder::class,
        ]);
    }
}
