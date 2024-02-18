<?php

use App\Http\Controllers\BUMDesaController;
use App\Http\Controllers\UserController;
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

Route::get('', function () {
    return view('percobaan');
});


Route::get('/', function () {
    return view('home.index');
})->name('home');


Route::get('/bumdesa',[BUMDesaController::class, 'index'])->name('bumdesa.index')->middleware('auth');
//Route::get('/bumdesa',[BUMDesaController::class, 'validation'])->name('bumdesa.index')->middleware('auth');
Route::get('/bumdesa/create',[BUMDesaController::class, 'create'])->name('bumdesa.create');
Route::get('/create/{id}',[BUMDesaController::class, 'desa'])->name('bumdesa.desa');
Route::post('/bumdesa/store',[BUMDesaController::class, 'store'])->name('bumdesa.store');
Route::get('/bumdesa/{bumdes}/detail',[BUMDesaController::class, 'detail'])->name('bumdesa.detail');
Route::get('/bumdesa/{bumdes}/edit',[BUMDesaController::class, 'edit'])->name('bumdesa.edit');
Route::put('/bumdesa/{bumdes}/edit',[BUMDesaController::class, 'update'])->name('bumdesa.update');
Route::delete('/bumdesa/{bumdes}/destroy',[BUMDesaController::class, 'destroy'])->name('bumdesa.destroy');
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
