<?php

namespace App\Http\Controllers;
use App\Referencies;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;

class ReferenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referencies = Referencies::all();
            return view('admin.reflist', compact('referencies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.refcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'image' => 'required'
        ])->validate();

        $total_files = count($request->file('image'));

        foreach ($request->file('image') as $file) {
            // rename & upload files to uploads folder
            $name = uniqid() . '_' . $file->getClientOriginalName(). '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/ref';
            $file->move($path, $name);

            // store in db
            $fileUpload = new Referencies();
            $fileUpload->description = $request->input('description');
            $fileUpload->image = $name;
            $fileUpload->title = $request->input('title');
            $fileUpload->save();
        }

        return back()->with("success", $total_files . " files uploaded successfully");
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $referencies = Referencies::findOrFail($id);
        return view('admin.refedit',compact('referencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = Referencies::find($id);
        if($request->has('image')){
        $validator = \Validator::make($request->all(), [
            'image'
        ])->validate();
        foreach ($request->file('image') as $file) {
            // rename & upload files to uploads folder
            $name = uniqid() . '_' . $file->getClientOriginalName();
            $path = public_path() . '/img/ref';
            $file->move($path, $name);

        $updateData->title = $request->get('title');
        $updateData->description = $request->get('description');
        $updateData ->image = $name;
        $updateData->update();
        }
        return redirect('admin/referencies')->with('completed', 'Frissítve');
        }
        else {
            $updateData->title = $request->get('title');
        $updateData->description = $request->get('description');
        $updateData->update();
        return redirect('admin/referencies')->with('completed', 'Frissítve');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $referencies = Referencies::findOrFail($id);
        $referencies->delete();

        return redirect('/admin/referencies')->with('completed', 'Töröltük');
    }
}
