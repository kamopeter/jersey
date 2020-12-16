<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index() {
        SEOMeta::setTitle('Kapcsolat');
        SEOMeta::setDescription('Pellérdi Sajtműhely. Kézi készítésű sajtok 100% természetes alapanyagokból. Vedd fel velünk a kapcsolatot.');
        return view('contact');

    }

    public function sendMail(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'checkboxG3' => 'required'
        ]);

        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        $details = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];

        Mail::to('kamopeter91@gmail.com')->send(new \App\Mail\ContactMail($details));
         return redirect()->back();
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
