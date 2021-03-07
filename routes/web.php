<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslatorController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;

use App\Objects\AuthManager;

// Widok strony głównej
Route::get('/', [LandingPageController::class, 'indexPage'])->name('landing-page');

// Ustawianie języka
Route::get('/language-set/{language}', function($language, LanguageController $languageController) {
    $languageController->setLanguage($language);
    return redirect()->route('landing-page');
});

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

Route::get('/admin/panel/{module?}', function($module = null) {
    if ($module == 'loggout')
    {
        $authManager = new AuthManager;
        $authManager->destroyLoginSession();
        return redirect()->route('landing-page');
    }
    if ($module == null)
    {
        $module = 'home';
    }
    return view('admin.index', [
        'module' => $module,
        'script' => 'assets/js/admin/' . $module . '.js'
    ]);
})->middleware('admin')->name('admin-panel');