<?php

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

Route::get('bumdesa', function () {
    return view('bumdesa.index');
})->name('bumdesa');

Route::get('bumdesa/create', function () {
    return view('bumdesa.create');
})->name('bumdesa.create');