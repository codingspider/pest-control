<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ContactController extends Controller
{
    public function index(){
        return view ('contact');
    }

    public function send_message (Request $request ){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required | email',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $contact = new Contact([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->message
            
        ]);

        $contact->save();
        Mail::send( new SendMailable ($request));

        return back ()->with('message', 'Your message has been sent successfuly');
    }
}
