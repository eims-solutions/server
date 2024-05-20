<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gradeLevels = [
            ['grade_level' => 7],
            ['grade_level' => 8],
            ['grade_level' => 9],
            ['grade_level' => 10],
            ['grade_level' => 11],
            ['grade_level' => 12],
        ];

        foreach ($gradeLevels as $gradeLevel) {
            \App\Models\GradeLevel::query()->firstOrCreate($gradeLevel);
        }
    }
}
