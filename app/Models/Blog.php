<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "description",
        "preview",
        "full_text",
        "created_at",
        "updated_at",
        "thumbnail"
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy("created_at");
    }
}
