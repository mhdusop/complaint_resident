@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
<<<<<<< HEAD
    <div class="row">
            <div class="col-md-6">
                <h3 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('pengguna.index')}}" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
    </div>
=======
        <h6 class="m-0 font-weight-bold text-primary">List Pengguna</h6>
        <a href="{{route('pengguna.index')}}" class="btn btn-primary float-right">Kembali</a>
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    </div>
    <div class="card-body">
        <form class="user" action="{{route('pengguna.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama">Nama</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" id="nama" name="nama"
=======
                    <input type="text" class="form-control form-control-user" id="nama" name="nama"
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
                        placeholder="Masukan Nama" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="email">Email</label>
<<<<<<< HEAD
                    <input type="email" class="form-control" name="email"
=======
                    <input type="email" class="form-control form-control-user" name="email"
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
                        id="email" placeholder="Masukan Email"required="required" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="telp">No Telpon</label>
<<<<<<< HEAD
                    <input type="telp" class="form-control" name="telp"
=======
                    <input type="telp" class="form-control form-control-user" name="telp"
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
                        id="telp" placeholder="Masukan No Telpon"required="required" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="password"> Password</label>
<<<<<<< HEAD
                    <input type="password" class="form-control" name="password"
=======
                    <input type="password" class="form-control form-control-user" name="password"
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
                        id="password" placeholder="Masukan Password"required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" required="required" name="role"> 
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                    <option value="user">User</option>
                    </select>
                </div>    
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="alamat">Alamat</label>
<<<<<<< HEAD
                    <textarea name="address" id="address-editor" class="form-control" cols="30" rows="10" placeholder="Masukan Alamat"></textarea>
=======
                    <textarea name="address" id="address-ckeditor" class="form-control" cols="30" rows="10" placeholder="Masukan Alamat"></textarea>
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
                </div>
            </div>
            <button class="btn btn-info text-white">Tambah Pengguna</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop