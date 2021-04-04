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
                <a href="{{route('pengguna.index')}}" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
        
    </div>
    <div class="card-body justify-content-center">
        <div class="row">
            <div class="col-md-5 offset-md-2">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td> : {{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td> : {{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td> : {{ $user->role }}</td>
                        </tr>
                        <tr>
                            <th>No Telpon</th>
                            <td> : {{ $user->telp }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : {!! $user->address !!}</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td> : {{ $user->created_at }}</td>
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