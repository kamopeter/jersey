<?php

namespace App\Http\Controllers;
use App\gallery;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    function index()
    {
     return view('admin.imageupload');
    }

    function upload(Request $request)
    {
     $image = $request->file('file');

     $imageName = time() . '-s.' . $image->extension();

     $image->move(public_path('img/gallery'), $imageName);

     return response()->json(['success' => $imageName]);
    }

    function delete(Request $request)
    {
        $name =  $request->get('name');
        gallery::where('name',$name)->delete();
        $path=public_path().'/img/gallery/'.$name;
        if (file_exists($path)) {
            unlink($path);
        }
        return $name;
    }
}

