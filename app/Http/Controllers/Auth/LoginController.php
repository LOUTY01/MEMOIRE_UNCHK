<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Connexion utilisateur
     */
    public function login(Request $request)
    {
        // Validation
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember');

        // Tentative de connexion
        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            $user = Auth::user();

            // Vérification de l'email
            if (!$user->hasVerifiedEmail()) {

                Auth::logout();

                $request->session()->invalidate();
                $request->session()->regenerateToken();

                $user->sendEmailVerificationNotification();

                return back()->withErrors([
                    'email' => "Votre compte n'est pas encore vérifié. Un nouveau lien de vérification vous a été envoyé."
                ])->withInput();
            }

            /*
            |--------------------------------------------------------------------------
            | Redirection selon le rôle
            |--------------------------------------------------------------------------
            */

            switch ($user->role) {

                case 'administrateur':
                    return redirect()->route('administrateur.dashboard');

                case 'medecin':
                    return redirect()->route('medecin.dashboard');

                case 'visiteur':
                default:
                    return redirect()->route('accueil.utilisateur');
            }
        }

        // Identifiants incorrects
        return back()->withErrors([
            'email' => 'Adresse e-mail ou mot de passe incorrect.'
        ])->withInput();
    }
}