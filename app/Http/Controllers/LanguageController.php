<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

session_start();
class LanguageController extends Controller
{
    public function setLanguage($language)
    {
        if ($language == 'PL')
        {
            $_SESSION['lang_setting'] = 'PL';
        }
        else if ($language == 'EN')
        {
            $_SESSION['lang_setting'] = 'EN';
        }
        else
        {
            $_SESSION['lang_setting'] = 'EN';
        }
    }

    public function getLanguage()
    {
        return $_SESSION['lang_setting'];
    }

    public function checkIfLangSetted()
    {
        return isset($_SESSION['lang_setting']);
    }
}