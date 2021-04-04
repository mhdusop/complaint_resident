@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h3 class="m-0 font-weight-bold text-primary">Detail Pengguna</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('pengaduan.index')}}" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
        
    </div>
    <div class="card-body justify-content-center">
        <div class="row">
            <div class="col-md-5 offset-md-2">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td> : {{ $complaint->user_id }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td> : {{ $complaint->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Isi Laporan</th>
                            <td> : {!! $complaint->isi_laporan !!}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td> : <img src="{{asset('data_file/'.$complaint->foto)}}" width="300"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop