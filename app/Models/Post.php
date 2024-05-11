<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    public $fillable = [
        "title",
        "excerpt",
        "slug",
        "body",
        "category_id"
    ];

    public function getRouteKeyName() {
        return "slug";
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
