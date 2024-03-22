<?php

use App\Http\Controllers\ALKAController;
use App\Http\Controllers\AsetDanPermodalanController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\KategoriAspekController;
use App\Http\Controllers\KelembagaanController;
use App\Http\Controllers\KerjasamaDanInovasiController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\PoinAspekController;
use App\Http\Controllers\SubkategoriAspekController;
use App\Http\Controllers\UsahaDanUnitUsahaController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BUMDesaController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PenilaianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', function () {
    return view('percobaan');
});


Route::get('/', function () {
    return view('home.index');
})->name('home');


Route::get('/bumdesa',[BUMDesaController::class, 'index'])->name('bumdesa.index')->middleware('auth');
Route::get('/bumdesa/create',[BUMDesaController::class, 'create'])->name('bumdesa.create');
Route::get('/create/{id}',[BUMDesaController::class, 'desa'])->name('bumdesa.desa');
Route::post('/bumdesa/store',[BUMDesaController::class, 'store'])->name('bumdesa.store');
Route::get('/bumdesa/{bumdes}/detail',[BUMDesaController::class, 'detail'])->name('bumdesa.detail');
Route::get('/bumdesa/{bumdes}/edit',[BUMDesaController::class, 'edit'])->name('bumdesa.edit');
Route::put('/bumdesa/{bumdes}/edit',[BUMDesaController::class, 'update'])->name('bumdesa.update');
Route::delete('/bumdesa/{bumdes}/destroy',[BUMDesaController::class, 'destroy'])->name('bumdesa.destroy');
Route::get('/bumdesa/search',[BUMDesaController::class, 'search'])->name('bumdesa.search');
//Route::get('/edit/{id}',[BUMDesaController::class, 'desa'])->name('bumdesa.desa');

Route::get('/user',[UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::get('/user/login',[UserController::class, 'login'])->name('user.login')->middleware('guest');
Route::post('/login',[UserController::class, 'authenticate']);
Route::post('/logout',[UserController::class, 'logout']);
Route::get('/user',[UserController::class, 'users'])->name('user.index')->middleware('auth');
Route::get('/user/create',[UserController::class, 'create'])->name('user.create');
Route::post('/user/store',[UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}/edit',[UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/{user}/destroy',[UserController::class, 'destroy'])->name('user.destroy');

Route::get('/test',function(){
    $max=DB::table('test')->select('point')->get();
    return $max[0]->point;

});

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index')->middleware('auth');
Route::get('/pengumuman/create',[PengumumanController::class, 'create'])->name('pengumuman.create')->middleware('auth');
Route::post('/pengumuman/store',[PengumumanController::class, 'store'])->name('pengumuman.store');
Route::get('/pengumuman/{pengumuman}/edit',[PengumumanController::class, 'edit'])->name('pengumuman.edit')->middleware('auth');
Route::put('/pengumuman/{pengumuman}/edit',[PengumumanController::class, 'update'])->name('pengumuman.update');
Route::delete('/pengumuman/{pengumuman}/destroy',[PengumumanController::class, 'destroy'])->name('pengumuman.destroy')->middleware('auth');

// Route::get('/evaluasi', function () {
//     return view('evaluasi.index');
// })->name('evaluasi.index');

// Route::get('/evaluasi/indikator', function () {
//     return view('evaluasi.indikator.index');
// })->name('indikator.index');

// Route::get('/evaluasi/indikator', [EvaluasiController::class, 'index_indikator'])->name('indikator.index')->middleware('auth');
// Route::get('/evaluasi/indikator/create', [EvaluasiController::class, 'create_indikator'])->name('indikator.create')->middleware('auth');
// Route::post('/evaluasi/indikator/store',[EvaluasiController::class, 'store_indikator'])->name('indikator.store');
// Route::get('/evaluasi/kategori_aspek', [EvaluasiController::class, 'index_kategori_aspek'])->name('kategori_aspek.index')->middleware('auth');
// Route::get('/evaluasi/aspek', [EvaluasiController::class, 'index_aspek'])->name('aspek.index')->middleware('auth');
// Route::get('/evaluasi/poin', [EvaluasiController::class, 'index_poin'])->name('poin.index')->middleware('auth');

Route::get('/evaluasi', [EvaluasiController::class, 'index'])->name('evaluasi.index')->middleware('auth');
//Route::resource('/evaluasi', EvaluasiController::class);
Route::resource('evaluasi/indikator', IndikatorController::class);
Route::resource('evaluasi/kategori_aspek', KategoriAspekController::class);
Route::resource('evaluasi/subkategori_aspek', SubkategoriAspekController::class);
Route::resource('evaluasi/poin_aspek', PoinAspekController::class);
Route::resource('/penilaian', PenilaianController::class);

Route::get('/kategori-aspek', [KategoriAspekController::class, 'kategori'])->name('kategori');
Route::get('penilaian/create/{id}',[PenilaianController::class, 'subkategoriaspek'])->name('penilaian.subkategoriaspek');

Route::resource('/kelembagaan', KelembagaanController::class);

Route::get('/manajemen',[ManajemenController::class, 'index'])->name('manajemen.index')->middleware('auth');
Route::get('/manajemen/create',[ManajemenController::class, 'create'])->name('manajemen.create');
Route::post('/manajemen/store',[ManajemenController::class, 'store'])->name('manajemen.store');
Route::get('/manajemen/{manajemen}/show',[ManajemenController::class, 'show'])->name('manajemen.show');
Route::get('/manajemen/{manajemen}/edit',[ManajemenController::class, 'edit'])->name('manajemen.edit');
Route::put('/manajemen/{manajemen}/edit',[ManajemenController::class, 'update'])->name('manajemen.update');
Route::delete('/manajemen/{manajemen}/destroy',[ManajemenController::class, 'destroy'])->name('manajemen.destroy');

Route::resource('/usaha-dan-unit-usaha', UsahaDanUnitUsahaController::class);
Route::resource('/kerjasama-dan-inovasi', KerjasamaDanInovasiController::class);
Route::resource('/aset-dan-permodalan', AsetDanPermodalanController::class);
Route::resource('/alka', ALKAController::class);

