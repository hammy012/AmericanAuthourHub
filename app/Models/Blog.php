<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'images',
        'date',
        'description',
        'tags',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'images' => 'array',
        'tags' => 'array',
        'date' => 'date',
    ];

    // optional: generate slug when creating
    public static function booted()
    {
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title) . '-' . Str::random(6);
            }
        });

        static::updating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title) . '-' . Str::random(6);
            }
        });
    }
}
