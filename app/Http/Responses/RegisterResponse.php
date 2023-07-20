<?php

namespace App\Http\Responses;
use Laravel\Fortify\Contracts\RegisterResponse as FortifyRegisterResponse;

class RegisterResponse implements FortifyRegisterResponse{
    
    public function toResponse($request){
        return redirect('/admin/register')->with('status', '¡Registro exitoso! Gracias.');
    }
}
