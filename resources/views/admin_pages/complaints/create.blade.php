@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
<<<<<<< HEAD
        <h6 class="m-0 font-weight-bold text-primary">Tambah Pengaduan</h6>
        <a href="{{route('pengaduan.index')}}" class="btn btn-secondary float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('pengaduan.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="alamat">Isi Laporan</label>
                <textarea name="isi_laporan" id="address-editor" class="form-control" cols="30" rows="10" placeholder="Masukan Laporan"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Masukkan Bukti</label>
                <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
            </div>
            <button class="btn btn-primary text-white">Tambah Aduan</button>
=======
        <h6 class="m-0 font-weight-bold text-primary">List Pengguna</h6>
        <a href="{{route('complaints.index')}}" class="btn btn-primary float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('complaints.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="email">NIK</label>
                    <input type="email" class="form-control form-control-user" name="email"
                        id="email" placeholder="Masukan Email"required="required" >
                </div>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Masukan Foto</label>
                    <input type="file" class="form-control-file" id="foto">
                </div>
            </form>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="alamat">Isi Laporan</label>
                    <textarea name="address" id="address-ckeditor" class="form-control" cols="30" rows="10" placeholder="Masukan Alamat"></textarea>
                </div>
            </div>
            <button class="btn btn-info text-white">Tambah Pengguna</button>
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop