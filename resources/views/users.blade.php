@extends('layouts.app_2')

@section('content')
<section class="main-section">
<div class="container">

                <div class="card-header">Dashboard Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class=text-center> Tabel User </h1>
                    <div class="row">
                    	    <div class="table table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-1">No</th>
                                    <th class="col-3">Nama</th>
                                    <th class="col-3">Email</th>
                                    <th class="col-3">Alamat</th>
                                    <th class="col-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                                @foreach($users as $d)
                                    <tr class="d-flex">
                                        <td class="col-1">{{ $no++ }}</td>
                                        <td class="col-3">{{ $d->name }}</td>
                                        <td class="col-3">{{ $d->email }}</td>
                                        <td class="col-3">{{ $d->address }}</td>
                                        <td class="col-3 text-center">                    
                                            <form action="{{Route('users.destroy',$d->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                            </form>
                                        </td>  
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
		</div>
   </section>
@endsection
