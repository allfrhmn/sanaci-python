<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Python Basic',
        //     'slug' => 'python-basic'
        // ]);

        // Post::create([
        //     'title' => 'Python Basic 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'python-basic-1',
        //     'body' => 'Python Basic 1 Body',
        //     'code' => 'print("Hello World!")'
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PostSeeder::class
        ]);
        // Post::factory(100)->recycle([
        //     Category::all(),
        //     User::all(),
        // ])->create();
    }
}
