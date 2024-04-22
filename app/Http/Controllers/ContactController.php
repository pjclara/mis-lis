<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $subject = $request->input('subject');
        $body = $request->input('body');
        $email = $request->input('email');

        Mail::to('ufpcr2020@gmail.com')
            ->send(
                new ContactMail($subject, $email, $body)
            );

        return redirect()->route('contact')->with('message', 'Muito obrigado por entrar em contato!');
    }
}
