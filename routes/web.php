<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteBookController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('notebook', NoteBookController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
