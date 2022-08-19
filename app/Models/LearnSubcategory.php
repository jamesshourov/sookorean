<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearnSubcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_english',
        'title_japanese',
        'title_french',
        'title_spanish',
        'title_arabic',
        'thumbnail',
        'audio',
        'video_link',
        'category_id',
    ];
}
