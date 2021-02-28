<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslatorController;
use App\Http\Controllers\AdminController;

// Widok strony głównej
Route::get('/', function() {
    return view('website.index');
})->name('landing-page');

// Strona logowania
Route::get('/admin/login', function() {
    if ( isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true )
    {
        return redirect()->route('admin-panel');
    }
    else
    {
        return view('login');
    }
})->name('admin-login');

Route::get('/admin/panel', [AdminController::class, 'indexPage'])->middleware('admin')->name('admin-panel');