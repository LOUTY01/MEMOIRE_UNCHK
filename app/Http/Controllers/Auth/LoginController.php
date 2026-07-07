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
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            $user = Auth::user();

            // EMAIL NON VÉRIFIÉ
            if (!$user->hasVerifiedEmail()) {

                // 🔥 RENVOYER EMAIL DE VERIFICATION
                $user->sendEmailVerificationNotification();

                Auth::logout();

                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return back()->withErrors([
                    'email' => "Votre compte n'est pas encore vérifié. Un nouveau lien a été envoyé par email."
                ]);
            }

            // REDIRECTION SELON ROLE
            return match ($user->role) {
                'administrateur' => redirect()->route('dashboard'),
                'medecin'        => redirect()->route('medecin.dashboard'),
                default           => redirect()->route('accueil.utilisateur'),
            };
        }

        return back()->withErrors([
            'email' => 'Adresse e-mail ou mot de passe incorrect.'
        ]);
    }
}