<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color_Select extends Model
{
    use HasFactory;

    protected $fillable = [
        "color_id",
        "user_id"
    ];
}
