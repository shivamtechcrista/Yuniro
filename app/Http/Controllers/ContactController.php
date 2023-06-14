<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('contact');
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',

        ]);
        $contact = new Contact
        ([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'description' => $request->description,
        ]);

        $contact->save();
    
        return redirect()->back()->with('success', 'Thank you for contacting us,<br>we will get back to you soon!');
    }
}
