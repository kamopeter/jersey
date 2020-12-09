<?php

namespace App\Http\Controllers;
use App\Open;
use Illuminate\Http\Request;
class OpenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $open = Open::all();
        return view('admin.openingindex',compact('open'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.openingcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = new Open([
            'local' => $request->get('local'),
            'address' => $request->get('address'),
            'opened'=> $request->get('opened'),
            'mapindex' => $request->get('mapindex'),
        ]);

        $storeData->save();

        return redirect('/admin')->with('completed', 'Felvéve!');
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
        $open = Open::findOrFail($id);
        return view('admin.openingedit', compact('open'));
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
        $updateData = Open::find($id);
        $updateData -> local = $request->get('local');
        $updateData -> address = $request->get('address');
        $updateData -> mapindex = $request->get('mapindex');
        $updateData -> opened = $request->get('opened');

        $updateData->save();
        return redirect('/admin/opening')->with('completed', 'Frissítve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $open = Open::findOrFail($id);
        $open->delete();

        return redirect('/opening')->with('completed', 'Töröltük');
    }
}
