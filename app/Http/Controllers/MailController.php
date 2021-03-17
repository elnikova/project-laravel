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
        $data = $request->validated();
        $to = env('MAIL_TO_ADDRESS');
        
        Mail::to($to)->send(new UserContactUsMail($data));
        return back()->with('success', 'Thank! Your email has been successfully sent!');
    }
}
