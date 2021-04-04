@extends('layouts.frontend_layout')
@section('content')

<<<<<<< HEAD
<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
        <a href="{{route('pengaduan.index')}}" class="btn btn-secondary float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('pengaduan.update',['id' => $complaint->id])}}" method="post">
            @csrf
            {{method_field('patch')}}
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="isi_laporan">Masukan Laporan</label>
                    <textarea name="isi_laporan" id="address-editor" class="form-control" cols="30" rows="10"   placeholder="Edit Laporan">{{$complaint->isi_laporan}}</textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Masukkan Bukti</label>
                <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
            </div>
            <button class="btn btn-primary text-white">Perbarui</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
=======
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Pengguna</h6>
            <a href="{{route('complaints.index')}}" class="btn btn-primary float-right">Kembali</a>
        </div>
        <div class="card-body">
            <form class="user" action="{{route('complaints.update',['id' => $complaint->id])}}" method="post">
                @csrf
                {{method_field('patch')}}
                <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control form-control-user" value="{{ $complaint->user_id}}" id="nama" name="nama"
                            placeholder="Edit Nama" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-user" name="email" value="{{ $complaint->nik}}"
                            id="email" placeholder="Edit Email"required="required" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="telp">No Telpon</label>
                        <input type="telp" class="form-control form-control-user" name="telp" 
                            id="telp" placeholder="Edit No Telepon"required="required" value="{{ $complaint->isi_laporan}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="password">Password</label>
                        <input type="password" class="form-control form-control-user" name="password" v
                            id="password" placeholder="Edit Password" >
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="alamat">Masukan Alamat</label>
                        <textarea name="address" id="address" class="form-control" cols="30" rows="10" value="{{ $user->address}}" placeholder="Edit Alamat"></textarea>
                    </div>
                </div> -->
                <button class="btn btn-primary text-white">Edit Pengguna</button>
            </form>
        </div>
    </div>

</div>
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
@stop