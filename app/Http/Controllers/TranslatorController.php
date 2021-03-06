<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;

class TranslatorController extends Controller
{
    // Dla wszystkich
    public static function translate($transKey, $lang) {
        $translation = Translation::where([
            ['language', $lang],
            ['translation_key', $transKey]
        ])->first();
        if (isset($translation) && isset($translation->value))
        {
            return $translation->value;
        }
        else
        {
            return 'missing-translation';
        }
    }

    // Tylko dla admina
    public function getTranslations() {
        $translations = Translation::all();
        return $translations;
    }

    // Tylko dla admina
    public function deleteTranslation($id) {
        $translation = Translation::where('id', $id)->delete();
        return $translation;
    }

    // Tylko dla admina
    public function createTranslation(Request $request)
    {
        $data = $request->all();
        var_dump($data['value']);
        $translation = Translation::create([
            'translation_key' => $data['transKey'],
            'language' => $data['lang'],
            'value' => $data['value']
        ]);
        return $translation;
    }
}
