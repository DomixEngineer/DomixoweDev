<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillsController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/contact', [ContactController::class, 'WebsiteContactFormMail']);

Route::get('/skills', [SkillsController::class, 'getSkills']);
Route::get('/skills/{category}', [SkillsController::class, 'getSkillsByCategory']);