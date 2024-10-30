<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteBookController;
use App\Http\Controllers\DashboardController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('notebook', NoteBookController::class);
Auth::routes();

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
