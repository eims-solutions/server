<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['team_name' => 'Targaryen'],
            ['team_name' => 'Stark'],
            ['team_name' => 'Lannister'],
            ['team_name' => 'Baratheon'],
            ['team_name' => 'Martell'],
            ['team_name' => 'Tyrell'],
            ['team_name' => 'Snow'],
            ['team_name' => 'Tully'],
            ['team_name' => 'Arryn'],
            ['team_name' => 'Greyjoy'],
        ];

        foreach ($teams as $team) {
            \App\Models\Team::query()->firstOrCreate($team);
        }
    }
}
