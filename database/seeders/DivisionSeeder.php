<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            ['division_name' => 'Senior High Division'],
            ['division_name' => 'Junior High Division'],
        ];

        foreach ($divisions as $division) {
            \App\Models\Division::query()->firstOrCreate($division);
        }
    }
}
