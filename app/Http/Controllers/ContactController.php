<?php

namespace App\Http\Controllers;

use App\Mail\EmailReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
    public function contactUs() {
        return view('contact');
    }
    
    public function contactSave (Request $request) {
        $name=$request->input('name');
        $surname=$request->input('surname');
        $email=$request->input('email');
        $message=$request->input('message');
        $contact=compact('name','surname','email','message');
        
        Mail::to('info@travelblog.it')->send(new EmailReceived($contact));
        
        return redirect()->back()->with('message','Grazie del tuo messaggio!');
    }
}
