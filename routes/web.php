<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslatorController;

// Widok strony głównej
Route::get('/', function() {
    return view('website.index');
})->name('landing-page');

// Strona logowania
Route::get('/admin/login', function() {
    return redirect()->route('landing-page');
})->name('admin-login');

Route::get('/admin/panel')->name('admin-panel');