<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan; //Memanggil Models Karyawan Untuk digunakan di dalam Controller

class KaryawanController extends Controller
{
    public function index() {
    	$karyawan = Karyawan::all(); //Berguna Untuk memanggil seluruh data pada Model Karyawan atau table karyawans
        return view('content.karyawan.index', compact('karyawan')); //Compact berguna untuk membawa variable karyawan ke dalam view
    }

    public function create()
    {
    	return view('content.karyawan.create');
    }

    public function save(Request $request)
    {
    	// Metode Untuk Upload File
    	$file = $request->file('file'); //Berguna Untuk mengambil file yang dikirim lewat form
    	$file_name = $file->getClientOriginalName(); //Membuat nama file yang nantinya akan disimpan ke data karyawan di database
    	$file->move('image/foto', $file_name); //Memindahkan file yang telah dikirim lewat form ke dalam folder iamge/foto pada folder public

    	$karyawan = new Karyawan; //Digunakan untuk membuat data baru pada Model Karyawan
    	$karyawan->nama = $request->nama; //Menentukan isi field nama dengan data yang dikirim lewat form
    	$karyawan->tanggal_lahir = $request->tanggal_lahir; //Menentukan isi field tanggal lahir dengan data yang dikirim lewat form
    	$karyawan->alamat = $request->alamat; //Menentukan isi field alamat dengan data yang dikirim lewat form
    	$karyawan->jabatan = $request->jabatan; //Menentukan isi field jabatan dengan data yang dikirim lewat form
    	$karyawan->foto = $file_name; //Menentukan isi field nama dengan nama file yang kita tentukan sebelumnya
    	$karyawan->save(); //Digunakan untuk menyimpan data

    	return redirect()->route('karyawan'); //Berguna untuk pindah ke halaman karyawan setelah berhasil mengeksekusi 
    }

    public function edit($id) // $id adalah data yang kita terima dari parameter id yang sebelumnya sudah kita kirim melalui route
    {
    	$karyawan = Karyawan::find($id); //Berguna untuk mencari suatu data karyawan berdasarkan id
    	return view('content.karyawan.edit', compact('karyawan')); //Data yang sudah kita cari lalu kita bawa ke view
    }

    public function update(Request $request, $id)
    {
    	$karyawan = Karyawan::find($id); //Berguna untuk mencari suatu data karyawan berdasarkan id

    	// Metode Untuk Upload File Baru
    	if($request->hasFile('file')){ // Jika ada data file baru yang dikirim lewat form
	    	$file = $request->file('file'); //Berguna Untuk mengambil file yang dikirim lewat form
	    	$file_name = $file->getClientOriginalName(); //Membuat nama file yang nantinya akan disimpan ke data karyawan di database
	    	$file->move('image/foto', $file_name); //Memindahkan file yang telah dikirim lewat form ke dalam folder iamge/foto pada folder public
		} else { //Jika tidak ada data file baru yang dikirim lewat form
			$file_name = $karyawan->foto;
		}

    	$karyawan->nama = $request->nama; //Menentukan isi field nama dengan data yang dikirim lewat form
    	$karyawan->tanggal_lahir = $request->tanggal_lahir; //Menentukan isi field tanggal lahir dengan data yang dikirim lewat form
    	$karyawan->alamat = $request->alamat; //Menentukan isi field alamat dengan data yang dikirim lewat form
    	$karyawan->jabatan = $request->jabatan; //Menentukan isi field jabatan dengan data yang dikirim lewat form
    	$karyawan->foto = $file_name; //Menentukan isi field nama dengan nama file yang kita tentukan sebelumnya
    	$karyawan->save(); //Digunakan untuk menyimpan data

    	return redirect()->route('karyawan'); //Berguna untuk pindah ke halaman karyawan setelah berhasil mengeksekusi 
    }

    public function delete($id)
    {
    	$karyawan = Karyawan::find($id)->delete();
    	return redirect()->route('karyawan'); //Berguna untuk pindah ke halaman karyawan setelah berhasil mengeksekusi 
    }
}
