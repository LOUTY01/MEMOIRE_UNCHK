<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // 1. Validation
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->boolean('remember');

        // 2. Tentative connexion
        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            $user = Auth::user();

            // ❌ NON VÉRIFIÉ
            if (!$user->hasVerifiedEmail()) {

                Auth::logout();

                // 🔥 IMPORTANT : recréer session propre
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                // renvoyer email de vérification
                $user->sendEmailVerificationNotification();

                return back()->withErrors([
                    'email' => "Votre compte n'est pas vérifié. Un lien de vérification a été envoyé."
                ]);
            }

            // ✔️ OK
            return redirect()->route('accueil.utilisateur');
        }

        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.'
        ])->withInput();
    }
}