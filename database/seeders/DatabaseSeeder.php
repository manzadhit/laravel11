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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "nyoman",
            "email" => "nyoman@gmail.com",
            "password" => bcrypt(12345),
        ]);

        Category::create(
            [
                "name" => "News",
                "slug" => "news"
            ]
        );

        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);

        Post::create([
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex voluptatum veniam deleniti modi tempore vero et nam. Cum, voluptatem, ad reiciendis, quas esse doloribus non ratione quam sapiente distinctio enim.",
            "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex voluptatum veniam deleniti modi tempore vero et nam. Cum, voluptatem, ad reiciendis, quas esse doloribus non ratione quam sapiente distinctio enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aliquam corrupti eaque magnam maiores excepturi architecto aut deleniti dolor, dolores doloribus, consequatur provident optio. Facere perspiciatis vero consequatur quia non!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, tempore fugit iusto fugiat maxime nisi ad aspernatur non? Harum quod hic velit deserunt iure soluta perferendis ut sapiente dolor doloremque!</p>",
            "user_id" => 1,
            "category_id" => 1
        ]);

        Post::create([
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex voluptatum veniam deleniti modi tempore vero et nam. Cum, voluptatem, ad reiciendis, quas esse doloribus non ratione quam sapiente distinctio enim.",
            "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex voluptatum veniam deleniti modi tempore vero et nam. Cum, voluptatem, ad reiciendis, quas esse doloribus non ratione quam sapiente distinctio enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aliquam corrupti eaque magnam maiores excepturi architecto aut deleniti dolor, dolores doloribus, consequatur provident optio. Facere perspiciatis vero consequatur quia non!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, tempore fugit iusto fugiat maxime nisi ad aspernatur non? Harum quod hic velit deserunt iure soluta perferendis ut sapiente dolor doloremque!</p>",
            "user_id" => 1,
            "category_id" => 2
        ]);

        Post::create(
            [
                "title" => "Judul Post Ketiga",
                "slug" => "judul-post-ketiga",
                "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex voluptatum veniam deleniti modi tempore vero et nam. Cum, voluptatem, ad reiciendis, quas esse doloribus non ratione quam sapiente distinctio enim.",
                "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex voluptatum veniam deleniti modi tempore vero et nam. Cum, voluptatem, ad reiciendis, quas esse doloribus non ratione quam sapiente distinctio enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aliquam corrupti eaque magnam maiores excepturi architecto aut deleniti dolor, dolores doloribus, consequatur provident optio. Facere perspiciatis vero consequatur quia non!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, tempore fugit iusto fugiat maxime nisi ad aspernatur non? Harum quod hic velit deserunt iure soluta perferendis ut sapiente dolor doloremque!</p>",
                "user_id" => 1,
                "category_id" => 1
            ]
        );
    }
}
