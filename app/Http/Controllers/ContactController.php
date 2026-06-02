<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'phone' => 'required',

            'email' => 'required|email',

            'subject'=> 'required',

            'message' => 'required'
        ]);

        Contact::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
        ]);

        return back()
            ->with('success',
            'Message sent successfully.');
    }
}
