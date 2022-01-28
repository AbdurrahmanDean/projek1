@extends('layouts.master')
@section('judul','Testimoni')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Testimoni</h1>
    </div>

    <div class="card-body">
        <a href="{{route('testimoni.create')}}" class="btn btn-sm btn-primary font-weight-bold mb-lg-4 mb-3"><i class="fas fa-plus mr-2"></i>Tambah</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Pesan</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimoni as $key => $value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->no_telp}}</td>
                        <td>{{$value->pesan}}</td>
                        <td>
                            <a title="Update Status" onclick="return confirm('Yakin ingin mengubah status?')" href="{{route('testimoni.update-status', [$value->id])}}" class="btn btn-sm {{$value->status == 'AKTIF' ? 'btn-success' : 'btn-danger'}}"> 
                                {{-- if di dalam class adalah ? --}}
                                @if($value->status == "AKTIF")
                                <i class="fas fa-check"></i>
                                @else
                                <i class="fas fa-times"></i>
                                @endif
                            </a>
                        </td>
                        <td>
                            <a title="Edit" href="{{route('testimoni.edit', [$value->id])}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <a title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')" href="{{route('testimoni.delete', [$value->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
        </div>
</div>
@endsection