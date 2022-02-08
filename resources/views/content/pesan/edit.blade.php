@extends('layouts.master')
@section('judul','Edit Pesan')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pesan</h1>
    </div>
    <div class="card">
        <div class="card-header">
            Edit Pesan
        </div>
            <div class="card-body">
                <form class="row justify-content-center" action="{{route('pesan.update', [$pesan->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group col-lg-12">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="{{$pesan->nama}}" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group col-lg-12">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{$pesan->email}}" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group col-lg-12">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" class="form-control" value="{{$pesan->no_telp}}" placeholder="Masukkan Nomor Telepon">
                </div>
                <div class="form-group col-lg-12">
                    <label>Pesan</label>
                    <input type="text" name="pesan" class="form-control" value="{{$pesan->pesan}}" placeholder="Masukkan Pesan Anda">
                </div>
                <div class="form-group col-lg-12 text-right">
                    <a href="{{route('pesan')}}" class="btn btn-sm btn-primary"><i class="fas fa-times mr-2"></i>Batal</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-2"></i>Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection