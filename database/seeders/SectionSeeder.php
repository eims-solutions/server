<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all grade levels
        $gradeLevels = \App\Models\GradeLevel::all();

        // Create sections for each grade level
        $gradeLevels->each(function ($gradeLevel) {
            $sections = [
                ['section_name' => 'Section A'],
                ['section_name' => 'Section B'],
                ['section_name' => 'Section C'],
            ];

            foreach ($sections as $section) {
                $gradeLevel->sections()->create($section);
            }
        });
    }
}
