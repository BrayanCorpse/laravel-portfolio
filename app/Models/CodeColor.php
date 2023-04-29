<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeColor extends Model
{
    use HasFactory;
    protected $fillable = [
        'color1',
        'color2',
        'color3',
        'color4',
    ];
}
