<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;



Route::get('/Admin', function () {
    return view('layouts.home');
});


Route::get('/', function () {
    return view('customer.home');
});
Route::get('/Customer', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('layouts.home');
});

//Gitu
Route::resource('/pesanan',\App\Http\Controllers\PesananController::class);
Route::resource('/barang',\App\Http\Controllers\barangController::class);
Route::resource('/pelanggan',\App\Http\Controllers\UserController::class);
Route::resource('/laporan', \App\Http\Controllers\laporanController::class);
Route::resource('/dashboard',\App\Http\Controllers\PesananController::class);
Route::resource('/status',\App\Http\Controllers\PelangganController::class);
Route::resource('/listcucian',\App\Http\Controllers\ListcucianController::class);


//Login
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/status', [PelangganController::class, 'showStatus'])->name('pelanggan.status');
Route::get('/list', [PelangganController::class, 'showList'])->name('pelanggan.list');

//Cek
Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');    
});
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('layouts.dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/chart-barang_masuk', [DashboardController::class, 'barang_masuk'])->name('chart.barang_masuk');
Route::get('/chart-barang_keluar', [DashboardController::class, 'barang_keluar'])->name('chart.barang_keluar');

//List Barang
Route::get('/list', [BarangController::class, 'index'])->name('list');
Route::post('/list/store', [BarangController::class, 'store'])->name('list.store');
Route::get('/list/destroy/{id}', [BarangController::class, 'destroy'])->name('list.destroy');
Route::post('/list/update/{id}', [BarangController::class, 'update'])->name('list.edit');

//Barang Masuk
Route::get('/barang-masuk', [BarangMasukController::class, 'index'])->name('barang-masuk');
Route::post('/barang-masuk/store/{id}', [BarangMasukController::class, 'store'])->name('barang-masuk.store');
Route::get('/history-barang-masuk', [BarangMasukController::class, 'history'])->name('history-barang-masuk');

//Barang Keluar
Route::get('/barang-keluar', [BarangKeluarController::class, 'index'])->name('barang-keluar');
Route::post('/barang-keluar/store/{id}', [BarangKeluarController::class, 'store'])->name('barang-keluar.store');
Route::get('/history-barang-keluar', [BarangKeluarController::class, 'history'])->name('history-barang-keluar');

// Update Pelanggan
Route::get('/edit-pelanggan/{id}', [PelangganController::class, 'editPelanggan'])->name('edit-pelanggan');
Route::post('/update-pelanggan/{id}', [PelangganController::class, 'update'])->name('update-pelanggan');

// Delete Pelanggan
Route::get('/delete-pelanggan/{id}', [PelangganController::class, 'destroy'])->name('delete-pelanggan');
//Graph

//Edit Listcucian
Route::put('/listcucian/{id_list}', 'ListCucianController@update')->name('listcucian.update');
Route::delete('/listcucian/{id_list}', 'ListCucianController@destroy')->name('listcucian.destroy');

Route::get('/list-harga', [PelangganController::class, 'listHarga'])->name('Customer.listHarga');