@extends('layouts.app_2')

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
          <div class="col-md-6 col-sm-8">
          <div class="card-header">
            <h1 style="padding-top: 20px;">Detail Barang</h1>
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="{{route('jual.show', $jual->id)}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="foto">Foto</label><br>
                                        <img src="{{ url('uploads/file/'.$jual->jual) }}" style="width: 150px; height: 150px;"><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama : </label>
                                            <br>{{ $jual->nama }}
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga : </label>
                                            <br>{{ $jual->harga }}
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat : </label>
                                            <br>{{ $jual->alamat }}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

          <div class="col-md-6 col-sm-6">
          <div class="card-header">
            <h1 style="padding-top: 20px;">Keterangan</h1>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('jual.show', $jual->id)}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <br>{{ $jual->keterangan }}
                                    </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>





@endsection
