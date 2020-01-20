<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenceramahController extends Controller
{
    //
    public function index()
    {
        $data_penceramah = \App\penceramah::all();
        return view('penceramah.index',['data_penceramah' => $data_penceramah]);
    }

    public function create(Request $request)
    {
        \App\penceramah::create($request->all());
        return redirect('/penceramah')->with('success','Penceramah Berjaya Ditambah!');
    }

    public function edit($id)
    {
        $penceramahedit =\App\penceramah::find($id);
        return view('penceramah/edit',['penceramah' => $penceramahedit]);
    }

    public function update(Request $request, $id)
    {
        $penceramahedit =\App\penceramah::find($id);
        $penceramahedit->update($request->all());
        return redirect('/penceramah')->with('success','Data Penceramah Berjaya Dikemaskini!');
    }

    public function delete($id)
    {
        $penceramahedit =\App\penceramah::find($id);
        $penceramahedit->delete($penceramahedit);
        return redirect('/penceramah')->with('success','Data Penceramah Berjaya Dihapuskan!');
    }
}
