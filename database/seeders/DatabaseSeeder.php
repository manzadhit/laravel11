<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming",
        ]);

        Category::create([
            "name" => "Mobile Programming",
            "slug" => "mobile-programming",
        ]);
        
        Post::factory(10)->create();
    }
}
