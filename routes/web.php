<?php

use App\Http\Controllers\QuestionsController;
use App\Models\Questions;
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

Route::group(['middleware' => \App\Http\Middleware\checkAuth::class], function() {
    Route::get('/questions', [QuestionsController::class, 'index'])->name('questions.index');
    Route::post('/questions', [QuestionsController::class, 'create'])->name('question.create');
    Route::get('/questions/create', function () { return view('question.create'); })->name('question.create_page');
    Route::get('/questions/{id}/edit', [QuestionsController::class, 'edit'])->name('question.edit');
    Route::put('/questions/{id}', [QuestionsController::class, 'update'])->name('question.update');
    Route::delete('/questions/{id}', [QuestionsController::class, 'destroy'])->name('question.destroy');
});
