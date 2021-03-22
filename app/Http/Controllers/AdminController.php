<?php

namespace App\Http\Controllers;

use App\Objects\StateManager;
use App\Objects\AuthManager;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // Strona główna
    public function indexPage()
    {
        return view('admin.index');
    }

    // Logowanie się
    public function login(Request $request, StateManager $stateManager, AuthManager $authManager)
    {   
        $form = $request->all();
        $email = $form['email'];
        $password = $form['password'];

        $user = User::select(['email', 'password'])->where([
            ['email', $email]
        ])->get();

        // Nie odnaleziono usera
        if ($user->count() < 1)
        {
            return $stateManager->unauthorized();
        }
        else
        {
            // Spłaszczenie kolekcji do pojedynczego obiektu
            $user = $user->first();
            
            if (Hash::check($password, $user->password))
            {
                $authManager->makeLoginSession();
                return $stateManager->authorized();
            }
            else
            {
                return $stateManager->unauthorized();
            }
        }
    }

    // Wylogowanie się
    public function logout(AuthManager $authManager)
    {
        $authManager->destroyLoginSession();
    }
}
