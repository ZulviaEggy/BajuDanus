<?php

namespace App\Http\Controllers;

use App\Jual;
use Illuminate\Http\Request;
use DB;

class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Jual::all();
        return view('jual', compact('data'));
    }

    public function barang(){
    $data = Jual::paginate(5);
    return view('map',compact('data'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jual_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\Jual();
        $data->nama = $request->input('nama');
        $jual = $request->file('jual');
        $data->harga = $request->input('harga');
        $data->alamat = $request->input('alamat');
        $data->keterangan = $request->input('keterangan');
        $ext = $jual->getClientOriginalExtension();
        $newName = $data->nama.time().".".$ext;
        $jual->move('uploads/file',$newName);
        $data->jual = $newName;
        $data->save();
        return redirect()->route('jual.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jual = \App\Jual::find($id);
        return view('Jual.show', ['jual'=>$jual]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jual = \App\Jual::find($id);
        return view('Jual.edit', ['jual'=>$jual]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Jual $jual)
    {
        $jual = \App\Jual::find($jual->id);
        if ($request->hasFile('foto')) { 
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $newName = $jual->nama.time().".".$ext;
            $jual->jual = $newName;
            $foto->move('uploads/file',$newName);
        } 
        $jual->nama = $request->nama;
        $jual->harga = $request->harga;
        $jual->alamat = $request->alamat;
        $jual->keterangan = $request->keterangan;
        $jual->save();
        $data = \App\Jual::all();
        return redirect()->route('jual.index')->with('alert-success','Berhasil Mengubah Data!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jual= \App\Jual::find($id);
        $jual->delete();
        return back();
    }

    public function downloadFoto($id){
        $foto = \App\Jual::where('id', $id)->firstOrFail();
        $path = public_path('uploads/file');
        $name = '/'.$foto->jual;
        $true_path = $path . $name;
        return response()->download($true_path, $foto
                 ->jual, ['Content-Type' => $foto->mime]);
    }
}
