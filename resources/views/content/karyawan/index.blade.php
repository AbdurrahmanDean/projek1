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
                Tabel Karyawan
            </div>
            <div class="card-body">
                <!-- {{route('karyawan.create')}} digunakan untuk memanggil route dengan nama route karyawan.create seperti yang sudah ditentukan di web.php -->
                <a href="{{route('karyawan.create')}}" class="btn btn-sm btn-primary font-weight-bold mb-lg-4 mb-3"><i class="fas fa-plus mr-2"></i>Tambah</a> 
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- $karyawan berasal dari controller yang sudah kita bawa menggunakan compact -->
                            <!-- foreach digunakan untuk melakukan perulangan disebuah data array yang digunakan untuk menampilkan seluruh data array dengan aturan tertentu -->
                            @foreach($karyawan as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <!--  {{$key+1}} digunakan sebagai urutan sebuah angka -->
                                <td>{{$value->nama}}</td>
                                <td>{{$value->tanggal_lahir}}</td>
                                <td>{{$value->alamat}}</td>
                                <td>{{\App\Models\Jabatan::where('id', $value->jabatan)->value('nama_jabatan')}}</td>
                                <td><img width="20%" src="{{asset('image/foto/'. $value->foto)}}"></td>
                                <td>
                                    <a title="Edit" href="{{route('karyawan.edit', [$value->id])}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')" href="{{route('karyawan.delete', [$value->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <!-- return confirm()  berguna untuk mengirim konfirmasi sebelum mengeksekusi perintah-->
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