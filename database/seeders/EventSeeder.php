<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['event_name' => 'BasketBall'],
            ['event_name' => 'Volleyball'],
            ['event_name' => 'Baseball'],
            ['event_name' => 'Badminton'],
            ['event_name' => 'Soccer'],
            ['event_name' => 'Track and Field'],
            ['event_name' => 'Table Tennis'],
            ['event_name' => 'Chess'],
            ['event_name' => 'Music'],
        ];

        foreach ($events as $event) {
            \App\Models\Event::query()->firstOrCreate($event);
        }
    }
}
