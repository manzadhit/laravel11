<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    // use HasFactory;
    static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nyoman",
            "body" => "    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae odit natus assumenda quis esse. Deleniti unde sint provident assumenda ea. Earum laudantium, similique eveniet ab ducimus fuga aut asperiores, expedita, placeat velit aperiam voluptatem ipsa! Obcaecati tempora cumque omnis doloremque recusandae enim nihil, et quod repudiandae a odit consequatur. Quis doloribus in, tempore quod suscipit accusamus officia eum sequi error molestiae, similique laboriosam praesentium perferendis cum iste expedita a voluptas. Saepe earum molestiae fugiat aperiam ab. Alias quas necessitatibus adipisci!"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "aditia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta sequi atque autem est doloremque quos voluptates repellat labore corrupti veniam, quibusdam, ipsum, itaque mollitia officia assumenda quas asperiores reiciendis quam in? Et amet, vero quibusdam neque ut pariatur expedita nam saepe vitae est nostrum corrupti quasi, exercitationem ipsam repellat omnis? Odio, magnam accusamus qui in, labore fugiat unde, quae iste iusto molestiae aliquam deleniti nulla culpa error omnis doloribus quisquam ut laborum dolorum consequuntur? Hic, laudantium molestias fuga repellat nesciunt necessitatibus vitae pariatur architecto illo inventore quae dicta sed animi error qui officia aperiam neque aliquam ipsam perspiciatis ipsum expedita."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function post($slug) {
        $posts = static::all();
        

        return $posts->firstWhere("slug", $slug);
    }
}
