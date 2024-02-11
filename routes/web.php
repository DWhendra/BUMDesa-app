<?php

use App\Http\Controllers\BUMDesaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('percobaan');
});


Route::get('home', function () {
    return view('home.index');
})->name('home');

Route::get('/bumdesa',[BUMDesaController::class, 'index'])->name('bumdesa.index');

//Route::get('bumdesa/create',[BUMDesaController::class, 'create'])->name('bumdesa.create');
Route::get('/bumdesa/create',[BUMDesaController::class, 'create'])->name('bumdesa.create');
Route::get('/create/{id}',[BUMDesaController::class, 'desa'])->name('bumdesa.desa');
Route::post('/bumdesa/store',[BUMDesaController::class, 'store'])->name('bumdesa.store');

//Route::get('/edit/{id}',[BUMDesaController::class, 'desa'])->name('bumdesa.desa');
