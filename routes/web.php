<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslatorController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;

use App\Objects\AuthManager;

// Widok strony głównej
Route::get('/', [LandingPageController::class, 'indexPage'])->name('landing-page');

// Strona logowania
Route::get('/admin/login', function(AuthManager $authManager) {
    if ($authManager->checkLoginSession())
    {
        return redirect()->route('admin-panel');
    }
    else
    {
        return view('login');
    }
})->name('admin-login');

Route::get('/admin', function() {
    return redirect()->route('admin-login');
});

Route::get('/admin/panel/{module?}', [AdminController::class, 'indexPage'])->middleware('admin')->name('admin-panel');