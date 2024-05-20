<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Male'],
            ['category_name' => 'Female'],
            ['category_name' => 'Mixed'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::query()->firstOrCreate($category);
        }
    }
}
