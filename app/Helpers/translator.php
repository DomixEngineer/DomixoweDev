<?php

    use App\Http\Controllers\TranslatorController;
    use App\Http\Controllers\LanguageController;

    // Funkcja do tłumaczenia na podstawie klucza translacyjnego
    function translate($translateKey)
    {
        $langController = new LanguageController;

        $lang = determinateBrowserLang();
        $finalLangSetting = 'PL';
        
        // Jezeli user ma juz ustawiony swój język jaki chce mieć
        if ( checkIfLangWasSetted($langController) )
        {
            $userLang = getSettingLang($langController);
            if ($userLang == 'PL')
            {
                // Tłumaczenie kluczy translacji po Polsku
                $finalLangSetting = 'PL';
            }
            else
            {
                // Tłumaczenie kluczy translacji po Angielsku
                $finalLangSetting = 'EN';
            }
        }
        else
        {
            // User nie ma ustawionego języka dlatego jest detekcja języka przeglądarki
            $startLang = determinateBrowserLang();
            if ($startLang == 'PL')
            {
                // Tłumaczenie kluczy translacji po Polsku
                $finalLangSetting = 'PL';
            }
            else
            {
                // Tłumaczenie kluczy translacji po Angielsku
                $finalLangSetting = 'EN';
            }
        }
        return TranslatorController::translate($translateKey, $finalLangSetting);
    }

    // Sprawdzenie języka przeglądarki usera
    function determinateBrowserLang()
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        return $lang;
    }

    // Sprawdzenie czy user sam sobie ustawił język (poprzez klik w flagę)
    function checkIfLangWasSetted(LanguageController $langController)
    {
        return $langController->checkIfLangSetted();
    }

    // Sprawdzenie ustawień języka w sesji
    function getSettingLang(LanguageController $langController)
    {
        return $langController->getLanguage();
    }
?>