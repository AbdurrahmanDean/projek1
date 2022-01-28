@extends('layouts.master')
@section('judul','Edit')
@section('konten')
    {{-- Begin Page Content --}}
    <div class="container-fluid">

        {{-- Page Heading --}}
        <div class="d sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Testimoni</h3>
        </div>

        <div class="card">
            <div class="card-header">
                Edit Testimoni
            </div>
        </div>
        <div class="card-body">

            <form class="row justify-content-center" action="{{route('testimoni.update', [$testimoni->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-12">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="{{$testimoni->nama}}" name="nama" placeholder="Masukkan Nama Testimoni" required>
                </div>
                <div class="form-group col-lg-12">
                    <label>Email</label>
                    <input type="text" class="form-control" value="{{$testimoni->email}}" name="email" placeholder="Masukkan Nama Testimoni" required>
                </div>
                <div class="form-group col-lg-12">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" value="{{$testimoni->no_telp}}" name="no_telp" placeholder="Masukkan Nama Testimoni" required>
                </div>
                <div class="form-group col-lg-12">
                    <label>Pesan</label>
                    <textarea class="form-control" name="pesan" placeholder="Masukkan Pesan Testimoni" rows="5" required>{{$testimoni->pesan}}</textarea>
                </div>
                <div class="form-group col-lg-12">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="" disabled>Pilih Status</option>
                        <option @if($testimoni->status == 'AKTIF') selected @endif value="AKTIF">Aktif</option>
                        <option @if($testimoni->status == 'NONAKTIF') selected @endif value="NONAKTIF">Non Aktif</option>
                    </select>
                </div>
                <div class="form-group col-lg-12 text-right">
                    <a href="{{route('testimoni')}}" class="btn btn-sm btn-secondary"><i class="fas fa-time mr-2"></i>Batal</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save mr-2"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection