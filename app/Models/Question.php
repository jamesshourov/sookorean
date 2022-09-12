<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_english',
        'title_japanese',
        'title_french',
        'title_spanish',
        'title_arabic',
        'answer',
        'image',
        'audio',
        'video',
        'level_id',
    ];
}
