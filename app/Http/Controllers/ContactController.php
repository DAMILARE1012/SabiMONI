<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class ContactController extends Controller
{


    public function saveContact(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        print('Done');

        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }

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
                $message->replyTo("support@sabimoni.org.ng");
            }
        );

        return redirect('https://sabimoni.org.ng/#contact')->with('success', 'We have received your enquiry on the SabiMONI financial literacy e-Learning portal. We will respond to you as soon as possible.');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
