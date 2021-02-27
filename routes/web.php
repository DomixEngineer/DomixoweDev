<?php

use Illuminate\Support\Facades\Route;

// Widok strony głównej
Route::get('/', function() {
    return view('website.index');
});