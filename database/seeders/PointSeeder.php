<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Get All Teams
        $teams = \App\Models\Team::all();

        //Create Points for each team
        $teams->each(function ($team) {
            $points = [
                'points' => fake()->numberBetween(50, 500)
            ];

            $team->point()->create($points);
        });
    }
}
