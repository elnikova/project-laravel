<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\UserContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contacts()
    {
        return view('main.contacts');
    }

    public function send(ContactRequest $request)
    { 
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        
        Mail::to('elnikova.dariya@gmail.com')->send(new UserContactUsMail($data));
        return back()->with('success', 'Thank! Your email has been successfully sent!');
    }
}
