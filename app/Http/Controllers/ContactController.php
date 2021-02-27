<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class ContactController extends Controller
{
    // Funkcja która wysyła wiadomość przesłaną za pomocą formularza ze strony internetowej (prośba o kontakt)
    public function WebsiteContactFormMail()
    {
        // Grupa mailingowa
        $group = 'client_website_contact';

        // Status maila (zeby unikąć automatycznej wysyłki w przyszłości)
        $state = 'sent';

        echo "TEST";
    }
}
