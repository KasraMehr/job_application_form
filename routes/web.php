<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/reg/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'full_registration'])->name('full_reg');
Route::get('/reg-education', function() {
    return view('education');
})->name('education.reg');

Route::get('/reg-works', function() {
    return view('works');
})->name('works.reg');

Route::post('/register-edu', [App\Http\Controllers\Auth\RegisterController::class, 'create_education'])->name('education');
Route::post('/register-work', [App\Http\Controllers\Auth\RegisterController::class, 'create_work'])->name('works');
