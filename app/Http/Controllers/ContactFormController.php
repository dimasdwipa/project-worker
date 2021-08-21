<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){
        $contact_form_data = request()->all();
        Mail::to('dimasdwiparaga@gmail.com')->send(new ContactFormMail($contact_form_data));
        
        return redirect()->route('home','/#contact')->with('success','Your Message Has been submitted Successfully');
    }
}
