<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[App\Http\Controllers\HomeController::class, 'indexnew'])->name('homenew');

Route::get('/contact',[App\Http\Controllers\HomeController::class, 'contactnew'])->name('contactnew');

Route::get('/about',[App\Http\Controllers\HomeController::class, 'aboutnew'])->name('aboutnew');

Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');
	Route::prefix('karyawan')->group(function(){
		Route::get('/', [App\Http\Controllers\KaryawanController::class, 'index'])->name('karyawan');
		Route::get('create', [App\Http\Controllers\KaryawanController::class, 'create'])->name('karyawan.create');
		Route::post('save', [App\Http\Controllers\KaryawanController::class, 'save'])->name('karyawan.save');
		Route::get('edit/{id}', [App\Http\Controllers\KaryawanController::class, 'edit'])->name('karyawan.edit');
		Route::post('update/{id}', [App\Http\Controllers\KaryawanController::class, 'update'])->name('karyawan.update');
		Route::get('delete/{id}', [App\Http\Controllers\KaryawanController::class, 'delete'])->name('karyawan.delete');

		//{id} adalah sebuah parameter yang digunakan untuk mengirim data tertentu ke dalam controller, seperti contoh yang kita kirim berupa id dari data karyawan yang nantinya digunakan untuk mencari sebuah data karyawan dengan id tertentu
	});

	Route::prefix('jabatan')->group(function(){
		Route::get('/', [App\Http\Controllers\JabatanController::class, 'index'])->name('jabatan'); // awal route, terutama prefix harus diawali /
		Route::get('create', [App\Http\Controllers\JabatanController::class, 'create'])->name('jabatan.create');
		Route::post('save', [App\Http\Controllers\JabatanController::class, 'save'])->name('jabatan.save'); // save harus pake post!!	
		Route::get('edit/{id}',[App\Http\Controllers\JabatanController::class, 'edit'])->name('jabatan.edit');
		Route::post('update/{id}',[App\Http\Controllers\JabatanController::class, 'update'])->name('jabatan.update');
		Route::get('delete/{id}',[App\Http\Controllers\JabatanController::class, 'delete'])->name('jabatan.delete');
	});
});

