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
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Basics',
            'slug' => 'basics',
            'color' => 'lime'
        ]);

        Category::create([
            'name' => 'Control Structures',
            'slug' => 'control-structures',
            'color' => 'cyan'
        ]);

        Category::create([
            'name' => 'Functions',
            'slug' => 'functions',
            'color' => 'teal'
        ]);

        Category::create([
            'name' => 'Data Structures',
            'slug' => 'data-structures',
            'color' => 'amber'
        ]);

        Category::create([
            'name' => 'Object-Oriented Programming',
            'slug' => 'object-oriented-programming',
            'color' => 'indigo'
        ]);
    }
}
