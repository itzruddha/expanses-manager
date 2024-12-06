<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoteBookController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::resource('notebook', NoteBookController::class)->middleware('auth');

Auth::routes();
Route::resource('notes', NoteController::class)->middleware('auth');
Route::get('/', [DashboardController::class, 'index'])->name('index')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
