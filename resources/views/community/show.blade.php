@extends('layouts.app_2')

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <h1 class="text-center">Selamat Anda berhasil bergabung ! </h1>
          <div class="col-md-6 col-sm-8">
          <div class="card-header">
            <h2 style="padding-top: 20px;">Detail Barang</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="{{route('community.show', $community->id)}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="foto">Foto</label><br>
                                        <img src="{{ url('uploads/file/'.$community->community) }}" style="width: 150px; height: 150px;"><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama : </label>
                                            <br>{{ $community->nama }}
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat : </label>
                                            <br>{{ $community->alamat }}
                                    </div>
                                    <a href="/community" class="btn btn-md btn-primary" style="margin:auto; text-align:center; display:block;">Manage</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

          <div class="col-md-6 col-sm-6">
          <div class="card-header">
            <h2 style="padding-top: 20px;">Keterangan</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('community.show', $community->id)}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <br>{{ $community->keterangan }}
                                    </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>





@endsection
