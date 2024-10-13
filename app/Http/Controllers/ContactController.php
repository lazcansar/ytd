<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestForContact;
use App\Models\Contact;

class ContactController extends Controller
{
    // Contact Page Request

    public function sendMessage(FormRequestForContact $request) {
        $messageSend = Contact::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'ip' => $request->ip(),
        ]);

        return redirect()->back()->with('success', 'Mesajınız gönderildi!');
    }
}
