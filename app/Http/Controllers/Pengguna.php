<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPengguna;

class Pengguna extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPengguna::all();
        return view('pengguna' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelPengguna();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('pengguna.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelPengguna::where('id', $id)->get();
        return view('pengguna_edit' , compact('data'));
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
        $data = ModelPengguna::where('id', $id)->first();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('pengguna.index')->with('alert-success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPengguna::where('id',$id)->first();
        $data->delete();
        return redirect()->route('pengguna.index')->with('alert-success', 'Data Berhasil Dihapus!');
    }
}
