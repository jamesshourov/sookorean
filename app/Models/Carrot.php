<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrot extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title_english',
        'title_japanese',
        'title_french',
        'title_spanish',
        'title_arabic',
        'description_english',
        'description_japanese',
        'description_french',
        'description_spanish',
        'description_arabic',
        'price'
    ];
}
