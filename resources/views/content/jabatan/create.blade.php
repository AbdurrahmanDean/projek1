@extends('layouts.master')
@section('judul','Jabatan')
@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Jabatan</h3>
        </div>

        <div class="card">
            <div class="card-header">
                Tambah Jabatan
            </div>
            <div class="card-body">
                <!-- {{route('jabatan.save')}} digunakan untuk memanggil route dengan nama route karyawan.save seperti yang sudah ditentukan di web.php -->
                <!-- enctype="multipart/form-data" digunakan agar form bisa mengirim sebuah file -->
                <form class="row justify-content-center" action="{{route('jabatan.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-lg-12">
                        <label>Nama Jabatan</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Jabatan" required>
                    </div>
                    <div class="form-group col-lg-12 text-right">
                        <a href="{{route('jabatan')}}" class="btn btn-sm btn-secondary"><i class="fas fa-times mr-2"></i>Batal</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-2"></i>Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection