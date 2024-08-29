<?php

namespace App\Http\Controllers;

use App\Models\ContactFormSubmission;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $submission = ContactFormSubmission::create($validated);

        Mail::to('jrmqhd@gmail.com')->send(new ContactFormMail($submission));

        return response()->json(['message' => 'Message Sent successfully'], 200);
    }
}
