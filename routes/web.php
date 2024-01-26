<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kategori;

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

use App\Http\Controllers\kategoricontroller2;

Route::resource('kategori',kategoricontroller2::class);
// app/Http/Controllers/MahasiswaController.php


/*// buat data
Route::get('Kategori/semua', [kategoricontroller::class,'semua']);

// tambah data
Route::get('Kategori/tambah', function () {
  Kategori::create([
   'nama_kategori' => "Pakaian Baru",
   'deskripsi' => "Semua jenis pakaian baru"
  ]);
  });

  //update data
  Route::get('Kategori/update/{id}', function ($id) {
    Kategori::find($id)->update([
      'nama_kategori' => "Pakaian Anak",
      'deskripsi' => "Semua jenis pakaian Anak"
    ]);
    });

    // haps data
    Route::get('Kategori/hapus/{id}', function ($id) {
      Kategori::find($id)->delete();
    });*/
Route::get('/dasboard', function () {
    return view('index');
  })->name('dasboard');
  Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
  Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
/*  use App\Http\Controllers\Mahasiswacontroller;

  Route:resource('mahasiswa', Mahasiswacontroller::class);*/
 /* Route::get('/latihanblade2', function () {
    return view('home');
  });*/
/*Route::get('/latihanblade', function () {
     return view('latihan', ['data1' => 0]);
   });*/

   /*Route::get('/latihankirimdata', function () {
    return view('welcome', ['title' => 'mahasiswa sistem informasi']);
  });*/

 /* Route::get('/latihankirimdata/{title}', function ($title) {
    return view('welcome', ['title' => '$title']);
  });*/

/*Route::get('/studyclub', function () {
    // return view('welcome');
     echo "Anda tidak memasukkan nama";
   //
   });
   

Route::get('/studyclub/{nama}', function ($nama) {
 // return view('welcome');
  echo "Selamat datang di Study club ".$nama;
//
});

Route::get('/studyclub/{nama}', function ($nama) {
    // return view('welcome');
     echo "Selamat datang di Study club ".$nama;
   //
   });
   */
  