<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TranslatorController;
use App\Http\Controllers\UsersMessagesController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/contact', [ContactController::class, 'WebsiteContactFormMail']);

Route::get('/skills', [SkillsController::class, 'getSkills']);
Route::get('/skills/{category}', [SkillsController::class, 'getSkillsByCategory']);

// Translacje
Route::get('/admin/translations', [TranslatorController::class, 'getTranslations'])->middleware('admin-api');   // Wszystkie translacje
Route::get('/admin/translations/{language}', [TranslatorController::class, 'getTranslationsByLanguage'])->middleware('admin-api');   // Translacje na podstawie języka
Route::post('/admin/translation/{id}', [TranslatorController::class, 'deleteTranslation'])->middleware('admin-api');    // Usuwanie tłumaczenia
Route::post('/admin/translations/create', [TranslatorController::class, 'createTranslation'])->middleware('admin-api'); // Utworzenie tłumaczenia
Route::post('/admin/translation/{id}/edit', [TranslatorController::class, 'editTranslation'])->middleware('admin-api'); // Edycja tłumaczenia

// Wiadomości od userów
Route::get('/admin/users-messages', [UsersMessagesController::class, 'getMessages'])->middleware('admin-api');
Route::post('/admin/users-messages/{id}/delete', [UsersMessagesController::class, 'deleteMessage'])->middleware('admin-api');


Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);