<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendMail(Request $request){

        $request->validate([
            'email' => 'required|email|max:255'
        ]);

        $data = [
            'email' => $request->email
        ];

        Mail::to('hola@brayanmanzano.dev')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }
}
