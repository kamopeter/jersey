<?php

namespace App\Http\Controllers;

use App\Referencies;
use Illuminate\Http\Request;

class RefpageController extends Controller
{
    public function index() {
        $referencies = Referencies::all();
        return view('references', compact('referencies'));
    }
}
