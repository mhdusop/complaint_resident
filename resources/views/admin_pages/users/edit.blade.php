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
                <h3 class="m-0 font-weight-bold text-primary">Edit Pengguna</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('pengguna.index')}}" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
=======
        <h6 class="m-0 font-weight-bold text-primary">List Pengguna</h6>
        <a href="{{route('pengguna.index')}}" class="btn btn-primary float-right">Kembali</a>
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    </div>
    <div class="card-body">
        <form class="user" action="{{route('pengguna.update',['id' => $user->id])}}" method="post">
            @csrf
            {{method_field('patch')}}
<<<<<<< HEAD
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" id="nama" name="nama"
                        placeholder="Edit Nama" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email}}"
                        id="email" placeholder="Edit Email"required="required" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="telp">No Telpon</label>
                    <input type="telp" class="form-control" name="telp" 
                        id="telp" placeholder="Edit No Telepon"required="required" value="{{$user->telp}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" v
                        id="password" placeholder="Edit Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" required="required" name="role"> 
                    <option value="admin" {{$user->role === 'admin'? 'selected' : ''}}>Admin</option>
                    <option value="petugas" {{$user->role === 'petugas'? 'selected' : ''}}>Petugas</option>
                    <option value="user" {{$user->role === 'user'? 'selected' : ''}}>Masyarakat</option>
                    </select>
                </div>    
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="alamat">Masukan Alamat</label>
                    <textarea name="address" id="address-editor" class="form-control" cols="30" rows="10" placeholder="Edit Alamat">{{$user->address}}</textarea>
                </div>
            </div>
            <button class="btn btn-info text-white">Perbarui</button>
=======
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control form-control-user" value="{{ $user->name }}" id="nama" name="nama"
                        placeholder="Edit Nama" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-user" name="email" value="{{ $user->email}}"
                        id="email" placeholder="Edit Email"required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="telp">No Telpon</label>
                    <input type="telp" class="form-control form-control-user" name="telp" 
                        id="telp" placeholder="Edit No Telepon"required="required" value="{{ $user->telp}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="password">Password</label>
                    <input type="password" class="form-control form-control-user" name="password" v
                        id="password" placeholder="Edit Password" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" required="required" name="role"> 
                        <option value="admin" {{$user->role === 'admin'? 'selected' : '' }}>Admin</option>
                        <option value="petugas"  {{$user->role === 'petugas'? 'selected' : '' }}>Petugas</option>
                        <option value="user" {{$user->role === 'user'? 'selected' : '' }}>User</option>
                    </select>
                </div>    
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="alamat">Masukan Alamat</label>
                    <textarea name="address" id="address" class="form-control" cols="30" rows="10" placeholder="Edit Alamat">{{ $user->address}}</textarea>
                </div>
            </div>
            <button class="btn btn-primary text-white">Edit Pengguna</button>
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop