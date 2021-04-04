@extends('layouts.frontend_layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
        @if (Auth::user()->role === 'admin')
        <a href="{{route('pengguna.create')}}" class="btn btn-primary btn-sm float-right">
        <i class="fas fa-user-plus"></i>
            Tambah Pengguna
        </a>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Addres</th>
                        <th>Phone</th>
                        <th>Rule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $users)

                    <tr>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{!! $users->address !!}</td>
                        <td>{{$users->telp}}</td>
                        <td>{{$users->role}}</td>
                        <td>
                            <a href="{{route('pengguna.show',['id'=>$users->id])}}" class="btn btn-info btn-sm">
                                <i class="fa fa-info"></i>
                            </a>
                            
                            <a href="{{route('pengguna.edit',['id'=>$users->id])}}" class="btn btn-success btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$users->id}}">
                                <i class="fas fa-trash"></i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$users->id}}" tabindex="-1" aria-labelledby="deleteModal{{$users->id}}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('pengguna.destroy', $users->id) }}" method="POST">       
                                            @csrf
                                            @method('DELETE')
                                                Apakah kamu yakin ingin menghapus {{$users->name}}?
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm">
                                                            <i class="fas fa-times"></i> Cancel
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-check"></i> Yes, sure
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@stop