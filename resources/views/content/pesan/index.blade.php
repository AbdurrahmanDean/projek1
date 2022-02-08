@extends('layouts.master')
@section('judul','Pesan Masuk')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pesan Masuk</h1>
    </div>
    <div class="card">
        <div class="card-header">
            Tabel Pesan Masuk
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Pesan Masuk</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesan as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->nama}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->no_telp}}</td>
                                <td>{{$value->pesan}}</td>
                                <td>
                                    <a title="Edit" href="{{route('pesan.edit', [$value->id])}}" class="btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')" href="{{route('pesan.delete',[$value->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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