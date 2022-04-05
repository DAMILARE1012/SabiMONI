<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{


    public function saveContact(Request $request)
    {

        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ],
        );
        print('Done');

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send(
            'pages.contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->subject('SabiMONI Contact US');
                $message->to('dammy4did@gmail.com');
            }
        );

        return redirect('/#contact')->with('success', 'Thank you! message well received');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
