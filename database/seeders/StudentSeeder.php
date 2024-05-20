<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all sections
        $sections = \App\Models\Section::all();

        // Create students for each section
        $sections->each(function ($section) {
            $students = [
                ['first_name' => fake()->firstName(), 'last_name' => fake()->lastName(), 'middle_name' => fake()->lastName()],
                ['first_name' => fake()->firstName(), 'last_name' => fake()->lastName(), 'middle_name' => fake()->lastName()],
                ['first_name' => fake()->firstName(), 'last_name' => fake()->lastName(), 'middle_name' => fake()->lastName()],
            ];

            foreach ($students as $student) {
                $section->students()->create($student);
            }
        });
    }
}
