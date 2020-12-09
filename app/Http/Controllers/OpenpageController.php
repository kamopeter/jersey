<?php

namespace App\Http\Controllers;
use App\Open;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class OpenpageController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Nyitvatartás');
        SEOMeta::setDescription('Pellérdi Sajtműhely. Pécsen és környékén. Friss házi készítésű sajtok. ');
        $open = Open::all();
        return view('open', compact('open'));

    }
}
