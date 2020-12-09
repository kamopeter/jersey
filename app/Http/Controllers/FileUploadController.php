<?php

namespace App\Http\Controllers;
use App\FileUpload;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
class FileUploadController extends Controller
{
   // show form
   public function index() {
    return view('admin.imageupload');
}
    public function lister() {
        $images = FileUpload::all();
        return view('admin.imagelist',compact('images'));
    }
// file upload
public function upload(Request $request)
{
    $validator = \Validator::make($request->all(), [
        'files' => 'required'
    ])->validate();

    $total_files = count($request->file('files'));

    foreach ($request->file('files') as $file) {
        // rename & upload files to uploads folder
        $name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/img/gallery';
        $file->move($path, $name);

        // store in db
        $fileUpload = new FileUpload();
        $fileUpload->filename = $name;
        $fileUpload->place = $request->input('place');
        $fileUpload->save();
    }

    return back()->with("success", $total_files . " files uploaded successfully");
}
public function show(){
    SEOMeta::setTitle('Galéria');
        SEOMeta::setDescription('Pellérdi Sajtműhely. Sajtok természetes alapanyagokból. Képek');
    $images = FileUpload::all();
    return view('gallery',compact('images'));
}
public function destroy($id)
    {
        $images = FileUpload::findOrFail($id);
        $image_path = public_path().'/img/gallery/'.$images->filename;
        unlink($image_path);
        $images->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect('admin/upload');
    }
}
