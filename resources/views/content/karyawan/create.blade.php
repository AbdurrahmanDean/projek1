@extends('layouts.master')
@section('judul','Karyawan')
@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Karyawan</h3>
        </div>

        <div class="card">
            <div class="card-header">
                Tambah Karyawan
            </div>
            <div class="card-body">
                <!-- {{route('karyawan.save')}} digunakan untuk memanggil route dengan nama route karyawan.save seperti yang sudah ditentukan di web.php -->
                <!-- enctype="multipart/form-data" digunakan agar form bisa mengirim sebuah file -->
                <form class="row justify-content-center" action="{{route('karyawan.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-lg-12">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Karyawan" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Karyawan" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Jabatan</label>
                        <select class="form-control" name="jabatan" required>
                            <option value="" selected disabled>-- Pilih Jabatan --</option>
                            <option value="1">Administrator</option>
                            <option value="2">Anggota</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Karyawan" rows="5" required></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="file" placeholder="Masukkan Tanggal Lahir Karyawan" required>
                    </div>
                    <div class="form-group col-lg-12 text-right">
                        <a href="{{route('karyawan')}}" class="btn btn-sm btn-secondary"><i class="fas fa-times mr-2"></i>Batal</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-2"></i>Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection