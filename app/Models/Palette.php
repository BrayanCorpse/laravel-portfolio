<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color1',
        'color2',
        'color3',
        'color4',
    ];
}
