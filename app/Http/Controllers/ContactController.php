<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function sendMail(Request $request){

        $request->validate([
            'email' => 'required|email|max:255|unique:contacts,email',

        ]);

        $data = [
            'email' => $request->email
        ];

        $contact = new Contact($data);
        $contact->save(); 
          
        $emails = [
            'firstEmail' => $request->email,
            'SecondEmail' => 'hola@brayanmanzano.dev'
        ];

        Mail::to( $emails )->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }
}
