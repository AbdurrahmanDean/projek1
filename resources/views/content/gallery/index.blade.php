@extends('layouts.master')
@section('judul','Gallery')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Gallery</h3>
    </div>

    <div class="card">
        <div class="card-header">
            Tabel Gallery
        </div>
        <div class="card-body">
            <a href="{{route('gallery.create')}}" class="btn btn-sm btn-primary font-weight-bold mb-lg-4 mb-3"><i class="fas fa-plus mr-2"></i>Tambah</a> 
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Gallery</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gallery as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->nama}}</td>
                            <td>{{$value->deskripsi}}</td>
                            <td><img width="20%" src="{{asset('image/foto/'. $value->foto)}}"></td>
                            <td>
                                <a title="Edit" href="{{route('gallery.edit', [$value->id])}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <a title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')" href="{{route('gallery.delete', [$value->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
        </div>
    </div>

</div>
@endsection