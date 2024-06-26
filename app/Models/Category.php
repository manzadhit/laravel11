<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        "name", "slug",
    ];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function post() {
        return $this->hasMany(Post::class);
    }
}
