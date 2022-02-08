@extends('layouts.master')
@section('judul','Create Gallery')
@section('konten')
    <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Gallery</h3>
    </div>

    <div class="card">
        <div class="card-header">
            Tambah Gallery
        </div>
        <div class="card-body">
            <form class="row justify-content-center" action="{{route('gallery.save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-12">
                    <label>Nama Gallery</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Gallery" required>
                </div>
                <div class="form-group col-lg-12">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" rows="5" required></textarea>
                </div>
                <div class="form-group col-lg-12">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="file" placeholder="Masukkan Foto" required>
                </div>
                <div class="form-group col-lg-12 text-right">
                    <a href="{{route('gallery')}}" class="btn btn-sm btn-secondary"><i class="fas fa-times mr-2"></i>Batal</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-2"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection