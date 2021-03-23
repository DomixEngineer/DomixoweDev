<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class UsersMessagesController extends Controller
{
    // Pobieranie wszystkich wiadomości od userów
    // Tylko dla admina
    public function getMessages()
    {
        $messages = Mail::where('group', 'client_website_contact')->get();
        return $messages;
    }

    // Usuwanie wiadomości
    // Tylko dla admina
    public function deleteMessage($id)
    {
        $message = Mail::where('id', $id)->delete();
        return $message;
    }
}
