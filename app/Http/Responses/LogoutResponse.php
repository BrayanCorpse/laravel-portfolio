<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as FortifyLogoutResponse;

class LogoutResponse implements FortifyLogoutResponse{
    
    public function toResponse($request){

        return redirect('/admin/login')->with('status', 'The session has been closed!');

    }
}

