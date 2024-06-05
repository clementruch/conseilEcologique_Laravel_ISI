<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function vueForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $data = $request->all();

        Mail::to('clemruch@gmail.com')->send(new ContactFormMail($data));

        return redirect('/contact')->with('success', 'Merci de nous avoir contactés !');
    }
}
