<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'actionlogout'])->name('actionlogout');



Route::middleware('auth')->group(function () 
{
Route::get('/dashboard', [DashboardController::class, 'index']);
// User //
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);

Route::get('/user/{id}/delete', [UserController::class, 'destroy']);
// End User //

// Barang //
Route::get('/barang', [BarangController::class, 'index']);

Route::get('/barang/tambah', [BarangController::class, 'create']);
Route::post('/barang/simpan', [BarangController::class, 'store']);

Route::get('/barang/{id}/show', [BarangController::class, 'show']);
Route::post('/barang/{id}/update', [BarangController::class, 'update']);

Route::get('/barang/{id}/delete', [BarangController::class, 'destroy']);
// End Barang //

// Barang Keluar//
Route::get('/jenis', [JenisController::class, 'index']);

Route::get('/jenis/tambah', [JenisController::class, 'create']);
Route::post('/jenis/simpan', [JenisController::class, 'store']);

Route::get('/jenis/{id}/show', [JenisController::class, 'show']);
Route::post('/jenis/{id}/update', [JenisController::class, 'update']);

Route::get('/jenis/{id}/delete', [JenisController::class, 'destroy']);
// End Barang Keluar//

// Barang Keluar//
Route::get('/supplier', [SupplierController::class, 'index']);

Route::get('/supplier/tambah', [SupplierController::class, 'create']);
Route::post('/supplier/simpan', [SupplierController::class, 'store']);

Route::get('/supplier/{id}/show', [SupplierController::class, 'show']);
Route::post('/supplier/{id}/update', [SupplierController::class, 'update']);

Route::get('/supplier/{id}/delete', [SupplierController::class, 'destroy']);
// End Barang Keluar//

// Barang Masuk//
Route::get('/barangmasuk', [BarangMasukController::class, 'index']);

Route::get('/barangmasuk/tambah', [BarangMasukController::class, 'create']);
Route::post('/barangmasuk/simpan', [BarangMasukController::class, 'store']);

Route::get('/barangmasuk/{id}/show', [BarangMasukController::class, 'show']);

// End Barang Masuk//

// Barang Keluar//
Route::get('/barangkeluar', [BarangKeluarController::class, 'index']);

Route::get('/barangkeluar/tambah', [BarangKeluarController::class, 'create']);
Route::post('/barangkeluar/simpan', [BarangKeluarController::class, 'store']);
Route::get('/barangkeluar/{id}/show', [BarangKeluarController::class, 'show']);


// End Barang Keluar//

Route::get('/barangmasuk/cetak', [BarangMasukController::class, 'cetak']);
Route::get('/barangkeluar/cetak', [BarangKeluarController::class, 'cetak']);
Route::get('/barangmasuk/{id}/struk', [BarangMasukController::class, 'struk']);
Route::get('/barangkeluar/{id}/struk', [BarangKeluarController::class, 'struk']);

Route::group(['middleware' => ['check.level:admin']], function () {

});
Route::group(['middleware' => ['check.level:user']], function () {
});
});