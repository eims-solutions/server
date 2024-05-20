<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['location_name' => 'Field'],
            ['location_name' => 'Basketball Court'],
            ['location_name' => 'Volleyball Court'],
            ['location_name' => 'Gymnasium'],
            ['location_name' => 'Track and Field'],
            ['location_name' => 'Computer Lab'],
            ['location_name' => 'Library'],
            ['location_name' => 'Audio Visual Room'],
        ];

        foreach ($locations as $location) {
            \App\Models\Location::query()->firstOrCreate($location);
        }
    }
}
