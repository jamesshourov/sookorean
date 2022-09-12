<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_english',
        'content_japanese',
        'content_french',
        'content_spanish',
        'content_arabic',
    ];
}
