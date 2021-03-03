<?php
    namespace App\Objects;

    class AuthManager {

        // Utworzenie sesji dla usera
        public function makeLoginSession()
        {
            session_start();
            $_SESSION['is_logged_in'] = true;
        }

        // Zniszczenie sesji userowi
        public function destroyLoginSession()
        {
            session_destroy();
        }

        // Sprawdzenie stanu logowania
        public function checkLoginSession()
        {
            session_start();
            if ( isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    }
?>