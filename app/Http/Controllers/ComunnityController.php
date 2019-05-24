<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;
use DB;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Community::all();
        return view('community', compact('data'));
    }

    public function join(){
    $data = Community::paginate(5);
    return view('community_show',compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('community_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\Community();
        $community = $request->file('community');
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->keterangan = $request->input('keterangan');
        $ext = $community->getClientOriginalExtension();
        $newName = $data->nama.time().".".$ext;
        $community->move('uploads/file',$newName);
        $data->community = $newName;
        $data->save();
        return redirect()->route('community.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $community = \App\Community::find($id);
        return view('Community.show', ['community'=>$community]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $community = \App\Community::find($id);
        return view('Community.edit', ['community'=>$community]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Community $community)
    {
        $community = \App\Community::find($community->id);
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $newName = $community->nama.time().".".$ext;
            $community->community = $newName;
            $foto->move('uploads/file',$newName);
        }
        $community->nama = $request->nama;
        $community->alamat = $request->alamat;
        $community->keterangan = $request->keterangan;
        $community->save();
        $data = \App\Community::all();
        return redirect()->route('community.index')->with('alert-success','Berhasil Mengubah Data!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $community= \App\Community::find($id);
        $community->delete();
        return back();
    }

    public function downloadFoto($id){
        $foto = \App\Community::where('id', $id)->firstOrFail();
        $path = public_path('uploads/file');
        $name = '/'.$foto->community;
        $true_path = $path . $name;
        return response()->download($true_path, $foto
                 ->community, ['Content-Type' => $foto->mime]);
    }
}
