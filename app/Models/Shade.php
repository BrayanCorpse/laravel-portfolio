<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'color1',
        'color2',
        'color3',
        'color4',
        'palette_id'
    ];

    public function palette()
    {
        return $this->belongsTo(Palette::class);
    }
}
