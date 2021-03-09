<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class UsersMessagesController extends Controller
{
    // Pobieranie wszystkich wiadomości od userów
    public function getMessages()
    {
        $messages = Mail::where('group', 'client_website_contact')->get();
        return $messages;
    }

    // Usuwanie wiadomości
    public function deleteMessage($id)
    {
        
    }
}
