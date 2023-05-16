<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shade extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'color1',
        'color2',
        'color3',
        'color4',
        'palette_id'
    ];
}
