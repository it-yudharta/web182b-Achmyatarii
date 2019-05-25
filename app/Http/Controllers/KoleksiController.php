<?php

namespace App\Http\Controllers;

use App\koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = koleksi::paginate(10);
        return view('koleksi.index',['koleksis' =>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koleksi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Koleksi;
        $item->jenis = $request['jenis'];
        $item->brand = $request['brand'];
        $item->desainer = $request['desainer'];
        $item->harga = $request['harga'];
        $item->save();

        return redirect('/koleksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function show(koleksi $koleksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Koleksi::find($id);
        
        return view('koleksi.edit',['koleksis' =>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = koleksi::find($id);
        $item->jenis = $request['jenis'];
        $item->brand = $request['brand'];
        $item->desainer = $request['desainer'];
        $item->harga = $request['harga'];
        $item->update();

        return redirect('/koleksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Koleksi::where('id',$id);
        $item->delete();

        return redirect()->back();
    }
}
