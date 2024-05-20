<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilitators = [
            ['facilitator_name' => fake()->name()],
            ['facilitator_name' => fake()->name()],
            ['facilitator_name' => fake()->name()],
            ['facilitator_name' => fake()->name()],
            ['facilitator_name' => fake()->name()],
            ['facilitator_name' => fake()->name()],
        ];

        foreach ($facilitators as $facilitator) {
            \App\Models\Facilitator::query()->firstOrCreate($facilitator);
        }
    }
}
