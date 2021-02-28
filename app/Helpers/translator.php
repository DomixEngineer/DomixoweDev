<?php

    use App\Http\Controllers\TranslatorController;

    // Funkcja do tłumaczenia na podstawie klucza translacyjnego
    function translate($translateKey)
    {
        $lang = determinateBrowserLang();
        $langSettings = checkIfLangWasSetted();
        $finalLangSetting = 'PL';
        
        // Jezeli user ma juz ustawiony swój język jaki chce mieć
        if ( checkIfLangWasSetted() )
        {
            $userLang = getSettingLang();
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
    function checkIfLangWasSetted()
    {
        return isset($_SESSION['lang_setting']);
    }

    function getSettingLang()
    {
        return $_SESSION['lang_setting'];
    }
?>