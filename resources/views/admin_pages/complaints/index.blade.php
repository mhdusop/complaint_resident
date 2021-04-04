@extends('layouts.frontend_layout')
<<<<<<< HEAD

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('pengaduan.create')}}" class="btn btn-primary btn-sm float-right">
            <i class="fas fa-folder-plus"></i>
            Tambah Pengaduan
        </a>
    </div>
    <div class="card-body">
    @if (Auth::user()->role === 'petugas' || 'admin')
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="110%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Pelapor</th>
                        <th>Isi Laporan</th>
                        <th>Foto Bukti</th>
                        <th collspan="100%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($complaints as $complaint)

                    <tr>
                        <td>{{$complaint->user_id}}</td>
                        <td>{{$complaint->user->name}}</td>
                        <td>{!! $complaint->isi_laporan !!}</td>
                        <td><img src="{{asset('data_file/'.$complaint->foto)}}" width="300" alt=""></td>
                        <td>
                        @if (Auth::user()->role === 'admin')
                            <a href="{{route('pengaduan.show',['id'=>$complaint->id])}}" class="btn btn-info btn-sm">
                                <i class="fa fa-info"></i>
                            </a>
                            <a href="{{route('pengaduan.edit',['id'=>$complaint->id])}}" class="btn btn-success btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$complaint->id}}">
                                <i class="fas fa-trash"></i>
                            </a>
                        @endif
                        @if (Auth::user()->role === 'petugas')
                            <a href="{{route('pengaduan.show',['id'=>$complaint->id])}}" class="btn btn-info btn-sm">
                                <i class="fa fa-info"></i>
                            </a>
                            <a href="{{route('pengaduan.edit',['id'=>$complaint->id])}}" class="btn btn-success btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$complaint->id}}">
                                <i class="fas fa-trash"></i>
                            </a>
                        @endif
                        @if (Auth::user()->role === 'user')
                            <a href="{{route('pengaduan.show',['id'=>$complaint->id])}}" class="btn btn-info btn-sm">
                                <i class="fa fa-info"></i>
                            </a>
                            <!-- <a href="{{route('pengaduan.edit',['id'=>$complaint->id])}}" class="btn btn-success btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a> -->
                        @endif
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$complaint->id}}" tabindex="-1" aria-labelledby="deleteModal{{$complaint->id}}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('pengaduan.destroy', $complaint->id) }}" method="POST">       
                                            @csrf
                                            @method('DELETE')
                                                Apakah kamu yakin ingin menghapus pengaduan {{$complaint->user->name}}?
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
            @endif
=======
@section('content')

<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengaduan</h6>
        @if (Auth::user()->role === 'admin')
        <a href="{{route('complaints.create')}}" class="btn btn-primary float-right">Tambah Pengaduan</a>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pelapor</th>
                        <th>NIK</th>
                        <th>Laporan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($complaints as $complaint)
                    <tbody>
                        <td>{{ $complaint->user->name}}</td>
                        <td>{{ $complaint->nik}}</td>
                        <td>{{ $complaint->isi_laporan}}</td>
                        <td>{{ $complaint->status}}</td>
                        <td>
                            <a href="" class="btn btn-primary">
                                <i class="fa fa-info"></i>
                            </a>
                            <a href="{{Route('complaints.edit',['id'=>$complaint->id])}}" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tbody>
                @endforeach
            </table>
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
        </div>
    </div>
</div>

</div>
<<<<<<< HEAD
<!-- /.container-fluid -->
=======
    
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
@stop