<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;

class Palette extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true 

            ]
        ];
    }

    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'url',
        'type'
    ];

    public function shades()
    {
        return $this->hasMany(Shade::class);
    }
}
