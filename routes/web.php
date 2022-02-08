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

Route::get('/team', [App\Http\Controllers\HomeController::class, 'teamnew'])->name('teamnew');

Route::get('/about',[App\Http\Controllers\HomeController::class, 'aboutnew'])->name('aboutnew');

Auth::routes();

Route::middleware(['auth'])->group(function () {
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
	
		Route::prefix('testimoni')->group(function(){
			Route::get('/', [App\Http\Controllers\TestimoniController::class, 'index'])->name('testimoni');
			Route::get('create', [App\Http\Controllers\TestimoniController::class, 'create'])->name('testimoni.create');
			Route::post('save', [App\Http\Controllers\TestimoniController::class, 'save'])->name('testimoni.save');
			Route::get('edit/{id}', [App\Http\Controllers\TestimoniController::class, 'edit'])->name('testimoni.edit');
			Route::post('update/{id}', [App\Http\Controllers\TestimoniController::class, 'update'])->name('testimoni.update');
			Route::get('update-status/{id}', [App\Http\Controllers\TestimoniController::class, 'updateStatus'])->name('testimoni.update-status');
			Route::get('delete/{id}', [App\Http\Controllers\TestimoniController::class, 'delete'])->name('testimoni.delete');
		});

		Route::prefix('pesan')->group(function(){
			Route::get('/', [App\Http\Controllers\PesanController::class, 'index'])->name('pesan');
			Route::post('save', [App\Http\Controllers\PesanController::class, 'save'])->name('pesan.save');
			Route::get('edit/{id}', [App\Http\Controllers\PesanController::class, 'edit'])->name('pesan.edit');
			Route::post('update/{id}', [App\Http\Controllers\PesanController::class, 'update'])->name('pesan.update');
			Route::get('delete/{id}', [App\Http\Controllers\PesanController::class, 'delete'])->name('pesan.delete');
		});

		Route::prefix('subscribe')->group(function(){
			Route::get('/', [App\Http\Controllers\SubscribeController::class, 'index'])->name('subscribe');
			Route::post('save', [App\Http\Controllers\SubscribeController::class, 'save'])->name('susbcribe.save');
			Route::get('delete/{id}', [App\Http\Controllers\SubscribeController::class, 'delete'])->name('subscribe.delete');
		});

		Route::prefix('blog')->group(function(){
			Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
			Route::get('create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
			Route::post('save', [App\Http\Controllers\BlogController::class, 'save'])->name('blog.save');
			Route::get('edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
			Route::post('update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
			Route::get('delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete');
		});

		Route::prefix('gallery')->group(function(){
			Route::get('/', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');
			Route::get('create', [App\Http\Controllers\GalleryController::class, 'create'])->name('gallery.create');
			Route::post('save', [App\Http\Controllers\GalleryController::class, 'save'])->name('gallery.save');
			Route::get('edit/{id}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('gallery.edit');
			Route::post('update/{id}', [App\Http\Controllers\GalleryController::class, 'update'])->name('gallery.update');
			Route::get('delete/{id}', [App\Http\Controllers\GalleryController::class, 'delete'])->name('gallery.delete');

		});

	});
		
});

