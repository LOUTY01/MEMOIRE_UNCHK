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
        ], [
            'email.required' => 'L’adresse e-mail est obligatoire.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
        ]);

        // 🔥 2. récupérer "se souvenir de moi"
        $remember = $request->has('remember');

        // 3. Tentative connexion
        if (Auth::attempt($credentials, $remember)) {

            // régénère session (sécurité)
            $request->session()->regenerate();

            $user = Auth::user();

            // ❌ EMAIL NON VÉRIFIÉ
            if (!$user->hasVerifiedEmail()) {

                Auth::logout();

                // renvoi email vérification
                $user->sendEmailVerificationNotification();

                return back()->withErrors([
                    'email' => "Votre compte n'est pas vérifié. Un lien a été renvoyé par email."
                ]);
            }

            // ✔️ Connexion réussie
            return redirect()->route('accueil.utilisateur');
        }

        // ❌ ERREUR LOGIN
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.'
        ])->withInput();
    }
}