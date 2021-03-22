<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;

class TranslatorController extends Controller
{
    // Dla wszystkich
    // Odpowiada za tłumaczenia w locie
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
    // Pobranie wszystkich translacji
    public function getTranslations() {
        $translations = Translation::all();
        return $translations;
    }

    // Tylko dla admina
    // Pobranie translacji na podstawie grupy językowej (PL, EN, ALL)
    public function getTranslationsByLanguage($language) {
        if ($language == 'ALL')
        {
            return $this->getTranslations();
        }
        else
        {
            $translations = Translation::where('language', $language)->get();
            return $translations;
        }
    }

    // Tylko dla admina
    // Kasacja translacji
    public function deleteTranslation($id) {
        $translation = Translation::where('id', $id)->delete();
        return $translation;
    }

    // Tylko dla admina
    // Tworzenie translacji
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

    // Tylko dla admina
    // Edycja danej translacji
    public function editTranslation(Request $request)
    {
        $data = $request->all();
        $translation = Translation::where('id', $data['id'])->update([
            'translation_key' => $data['translation_key'],
            'language' => $data['language'],
            'value' => $data['value']
        ]);
        return $translation;
    }
}
