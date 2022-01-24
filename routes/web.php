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

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('karyawan')->group(function(){
	Route::get('/', [App\Http\Controllers\KaryawanController::class, 'index'])->name('karyawan');
	Route::get('create', [App\Http\Controllers\KaryawanController::class, 'create'])->name('karyawan.create');
	Route::post('save', [App\Http\Controllers\KaryawanController::class, 'save'])->name('karyawan.save');
	Route::get('edit/{id}', [App\Http\Controllers\KaryawanController::class, 'edit'])->name('karyawan.edit');
	Route::post('update/{id}', [App\Http\Controllers\KaryawanController::class, 'update'])->name('karyawan.update');
	Route::get('delete/{id}', [App\Http\Controllers\KaryawanController::class, 'delete'])->name('karyawan.delete');

	//{id} adalah sebuah parameter yang digunakan untuk mengirim data tertentu ke dalam controller, seperti contoh yang kita kirim berupa id dari data karyawan yang nantinya digunakan untuk mencari sebuah data karyawan dengan id tertentu
});

Route::get('/jabatan', [App\Http\Controllers\JabatanController::class, 'index'])->name('jabatan');


