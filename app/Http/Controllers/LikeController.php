<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LikeCount;

class LikeController extends Controller
{
    public function like(){
        $count = LikeCount::incrementCount();
        return response()->json(['count' => $count]);
    }
}
