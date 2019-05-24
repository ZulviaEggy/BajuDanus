@extends('layouts.app_2')
@section('content')
 <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <h1>Komunitas</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="row">
            <div class="table table-responsive">
            <table class="table table-bordered" id="table">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Alamat</th>
                    <th class="text-center" width="150px">
          <a href="community/create" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i>
          </a>
        </th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td class="text-center"><img src="{{ url('uploads/file/'.$datas->community) }}" style="width: 150px; height: 150px;">
                        </td>
                        <td>{{ $datas->alamat }}</td>

                        <td class="text-center">
                                <a href="{{ route('community.show',$datas->id) }}" class=" btn btn-sm btn-primary">+ Join</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
