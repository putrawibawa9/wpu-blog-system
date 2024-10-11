<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Front-end', 'slug' => 'front-end']);
        Category::create(['name' => 'Back-end', 'slug' => 'back-end']);
        Category::create(['name' => 'Dev-ops', 'slug' => 'dev-ops']);
    }
}
