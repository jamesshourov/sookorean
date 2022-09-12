<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'option_title_english',
        'option_title_japanese',
        'option_title_french',
        'option_title_spanish',
        'option_title_arabic',
        'option_value',
        'question_id'
    ];
}
