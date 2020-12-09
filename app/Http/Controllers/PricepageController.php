<?php

namespace App\Http\Controllers;
use App\PriceList;
use PDF;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PricepageController extends Controller
{
    public function index() {
        SEOMeta::setTitle('Árlisták');
        SEOMeta::setDescription('Sajtok, joghurtok, tej. Árak');
        $pricelist = PriceList::all();
        return view('pricelist',compact('pricelist'));
    }
    public function createPDF() {
        $pricelist = PriceList::all();
        $pdf = PDF::loadView('pricelistPDF', compact('pricelist'));

        return $pdf->download('arlista-pellerdi-sajtmuhely.pdf');
      }
}
