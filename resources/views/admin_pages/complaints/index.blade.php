@extends('layouts.frontend_layout')

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
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@stop