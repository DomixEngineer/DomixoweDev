<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function indexPage()
    {
        return view('website.index');
    }
}
