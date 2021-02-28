<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;

class TranslatorController extends Controller
{
    public static function translate($transKey, $lang) {
        $translation = Translation::where([
            ['language', $lang],
            ['translation_key', $transKey]
        ])->first();
        return $translation->value;
    }
}
