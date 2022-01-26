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
                Edit Karyawan
            </div>
            <div class="card-body">
                <!-- {{route('karyawan.update', [$karyawan->id])}} digunakan untuk memanggil route dengan nama route karyawan.update dengan melempar sebuah parameter seperti yang sudah ditentukan di web.php -->
                <!-- enctype="multipart/form-data" digunakan agar form bisa mengirim sebuah file -->
                <form class="row justify-content-center" action="{{route('karyawan.update', [$karyawan->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-lg-12">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" value="{{$karyawan->nama}}" name="nama" placeholder="Masukkan Nama Karyawan" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" value="{{$karyawan->tanggal_lahir}}" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Karyawan" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Jabatan</label>
                        <select class="form-control" name="jabatan" required>
                            <option value="" selected disabled>-- Pilih Jabatan --</option>
                            @foreach($jabatan as $value)
                            <option value="{{$value->id}}" @if($karyawan->jabatan == $value->id) selected @endif>{{$value->nama_jabatan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Karyawan" rows="5" required>{{$karyawan->alamat}}</textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Foto <span class="text-danger">*Isi jika ingin merubah foto</span></label>
                        <input type="file" class="form-control" name="file" placeholder="Masukkan Tanggal Lahir Karyawan">
                    </div>
                    <div class="col-lg-12">
                        <img width="30%" src="{{asset('image/foto/'. $karyawan->foto)}}">
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