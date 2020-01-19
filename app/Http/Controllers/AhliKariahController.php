<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AhliKariahController extends Controller
{
    //
    public function index()
    {
        $data_ahlikariah = \App\ahlikariah::all();
        return view('ahlikariah.index',['data_ahlikariah' => $data_ahlikariah]);
    }

    public function create(Request $request)
    {
        \App\ahlikariah::create($request->all());
        return redirect('/ahlikariah')->with('success','Ahli Kariah Berjaya Ditambah!');
    }

    public function edit($id)
    {
        $ahlikariahedit =\App\ahlikariah::find($id);
        return view('ahlikariah/edit',['ahlikariah' => $ahlikariahedit]);
    }

    public function update(Request $request, $id)
    {
        $ahlikariahedit =\App\ahlikariah::find($id);
        $ahlikariahedit->update($request->all());
        return redirect('/ahlikariah')->with('success','Data Ahli Kariah Berjaya Dikemaskini!');
    }

    public function delete($id)
    {
        $ahlikariahedit =\App\ahlikariah::find($id);
        $ahlikariahedit->delete($ahlikariahedit);
        return redirect('/ahlikariah')->with('success','Data Ahli Kariah Berjaya Dihapuskan!');
    }
}
