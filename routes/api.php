<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TranslatorController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/contact', [ContactController::class, 'WebsiteContactFormMail']);

Route::get('/skills', [SkillsController::class, 'getSkills']);
Route::get('/skills/{category}', [SkillsController::class, 'getSkillsByCategory']);

// Translacje
Route::get('/admin/translations', [TranslatorController::class, 'getTranslations'])->middleware('admin-api');
Route::post('/admin/translation/{id}', [TranslatorController::class, 'deleteTranslation'])->middleware('admin-api');
Route::post('/admin/translations/create', [TranslatorController::class, 'createTranslation'])->middleware('admin-api');

Route::post('/admin/login', [AdminController::class, 'login']);