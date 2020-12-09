<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        SEOMeta::setTitle('Kapcsolat');
        SEOMeta::setDescription('Pellérdi Sajtműhely. Kézi készítésű sajtok 100% természetes alapanyagokból. Vedd fel velünk a kapcsolatot.');
        return view('contact');

    }
}
