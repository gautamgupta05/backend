<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact', [
            'meta_title' => "Contact Us",
            'meta_description' => "Get in touch with us.",
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|min:10',
        ]);

        // SEND EMAIL (optional)
        // Mail::raw($request->message, function($msg) use ($request){
        //     $msg->to('admin@example.com')
        //         ->subject("New Contact From: " . $request->name);
        // });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
