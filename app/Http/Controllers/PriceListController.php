<?php

namespace App\Http\Controllers;
use App\PriceList;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricelist = PriceList::all();
        return view ('admin.pricelisteIndex',compact('pricelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pricelistecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = new PriceList([
            'productname' => $request->get('productname'),
            'price' => $request->get('price'),
            'unity'=> $request->get('unity'),
        ]);

        $storeData->save();

        return redirect('/admin/pricedit')->with('completed', 'Felvéve!');
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
        $pricelist = PriceList::findOrFail($id);
        return view('admin.pricelistedit', compact('pricelist'));
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
        $updateData = PriceList::find($id);
        $updateData -> productname = $request->get('productname');
        $updateData -> price = $request->get('price');
        $updateData -> unity = $request->get('unity');

        $updateData->save();
        return redirect('admin/pricedit')->with('completed', 'Frissítve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pricelist = PriceList::findOrFail($id);
        $pricelist->delete();

        return redirect('/admin/pricedit')->with('completed', 'Töröltük');
    }
}
