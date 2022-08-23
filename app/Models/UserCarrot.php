<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCarrot extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'carrot_id'];
}
