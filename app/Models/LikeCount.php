<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LikeCount extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'count'
    ];

    public static function getCount(){

        $likeCount = LikeCount::withTrashed();

        if ($likeCount->exists()) {
            return $likeCount->first()->count;
        }
        else {
            LikeCount::create(['count' => 0]);
        }
    }

    public static function incrementCount(){
        
        $likeCount = LikeCount::withTrashed()->first();
        $likeCount->count++;
        $likeCount->save();
        return $likeCount->count; 

    }


}
