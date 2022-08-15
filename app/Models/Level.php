<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'category_id',
        'title_english',
        'title_japanese',
        'title_french',
        'title_spanish',
        'title_arabic',
    ];
}
