<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class ContactController extends Controller
{
    // Funkcja która wysyła wiadomość przesłaną za pomocą formularza ze strony internetowej (prośba o kontakt)
    public function WebsiteContactFormMail(Request $request)
    {
        // Dane z formularza
        $form = $request->all();

        // Grupa mailingowa
        $group = 'client_website_contact';

        // Status maila (zeby unikąć automatycznej wysyłki w przyszłości)
        $state = 'sent';

        // Walidacja formularza
        $formValidation = $this->validateWebForm($request);

        // Dane klienta
        $clientData = json_encode($form, JSON_UNESCAPED_UNICODE);

        // Utworzenie maila
        $mail = Mail::create([
            'options' => $clientData,
            'group' => $group,
            'state' => $state
        ]);

        return $mail;
    }

    // Walidacja formularza
    public function validateWebForm(Request $request)
    {
        $customMessages = [
            'required' => translate('landingpage.fifthslide.contact.requiredFieldError'),
            'email' => translate('landingpage.fifthslide.contact.wrongEmail'),
            'max' => translate('landingpage.fifthslide.contact.charactersError')
        ];

        return $request->validate([
            'name' => 'required',
			'phoneNumber' => 'required',
			'email' => 'required|email',
			'message' => 'required|max:255'
        ], $customMessages);
    }
}
