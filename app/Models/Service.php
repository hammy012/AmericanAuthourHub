<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_title',
        'title',
        'short_desc',
        'sec_title',
        'description',
        'image',
        'icon_image',
    ];
}
