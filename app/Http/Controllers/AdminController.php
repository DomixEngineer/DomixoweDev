<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexPage()
    {
        return view('admin.index');
    }
}
