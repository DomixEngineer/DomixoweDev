<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AdminController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/contact', [ContactController::class, 'WebsiteContactFormMail']);

Route::get('/skills', [SkillsController::class, 'getSkills']);
Route::get('/skills/{category}', [SkillsController::class, 'getSkillsByCategory']);

Route::post('/admin/login', [AdminController::class, 'login']);