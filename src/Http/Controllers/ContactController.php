<?php

namespace Bryan\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bryan\Contact\Models\Contact;
use Bryan\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        // return $request->all();
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
