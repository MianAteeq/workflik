<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form
        $request->validate([
            'first'   => 'required|string|max:50',
            'last'    => 'required|string|max:50',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // You can save to DB / send email here
        Contact::create($request->all());

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
