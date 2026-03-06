<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'full_name'    => ['required', 'string', 'max:120'],
            'company_name' => ['required', 'string', 'max:120'],
            'phone'        => ['required', 'digits:8'],
            'email'        => ['required', 'email', 'max:120'],
            'message'      => ['required', 'string', 'max:3000'],
        ]);

        // Correo interno para Makitha
        Mail::to('fernando.vasquez@makitha.com')->send(new ContactFormMail($data));

        // Correo de confirmación para el usuario
        Mail::to($data['email'])->send(new ContactConfirmationMail($data));

        return back()->with('success', 'Tu mensaje fue enviado correctamente.');
    }
}