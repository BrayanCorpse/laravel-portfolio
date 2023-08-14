<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cover extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true 

            ]
        ];
    }

    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'url'
    ];
}
