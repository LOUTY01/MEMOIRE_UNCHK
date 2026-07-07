<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /**
     * Traitement de l'inscription utilisateur
     */
    public function store(Request $request)
    {
        // 1. Validation des données
        $validated = $request->validate(
            // RÈGLES
            [
                'nom'            => 'required|string|max:255',
                'email'          => 'required|email|unique:users,email',
                'telephone'      => 'required|string|max:20',
                'date_naissance' => 'required|date',
                'sexe'           => 'required|in:homme,femme',
                'password'       => 'required|confirmed|min:8',
            ],
            // MESSAGES PERSONNALISÉS
            [
                'nom.required'            => 'Le nom complet est obligatoire.',
                'nom.max'                 => 'Le nom complet ne doit pas dépasser 255 caractères.',
                'email.required'          => 'L’adresse e-mail est obligatoire.',
                'email.email'             => 'Veuillez saisir une adresse e-mail valide.',
                'email.unique'            => 'Cette adresse e-mail est déjà utilisée.',
                'telephone.required'      => 'Le numéro de téléphone est obligatoire.',
                'telephone.max'           => 'Le numéro de téléphone est trop long.',
                'date_naissance.required' => 'La date de naissance est obligatoire.',
                'date_naissance.date'     => 'Veuillez saisir une date de naissance valide.',
                'sexe.required'           => 'Veuillez sélectionner votre sexe.',
                'password.required'       => 'Le mot de passe est obligatoire.',
                'password.min'            => 'Le mot de passe doit contenir au moins 8 caractères.',
                'password.confirmed'      => 'La confirmation du mot de passe ne correspond pas.',
            ],
            // NOMS PERSONNALISÉS DES CHAMPS
            [
                'nom'            => 'nom complet',
                'email'          => 'adresse e-mail',
                'telephone'      => 'numéro de téléphone',
                'date_naissance' => 'date de naissance',
                'sexe'           => 'sexe',
                'password'       => 'mot de passe',
            ]
        );

        // 2. Création de l'utilisateur avec le rôle par défaut
        $user = User::create([
            'nom'            => $validated['nom'],
            'email'          => $validated['email'],
            'telephone'      => $validated['telephone'],
            'date_naissance' => $validated['date_naissance'],
            'sexe'           => $validated['sexe'],
            'password'       => Hash::make($validated['password']),
            'role'           => 'visiteur', // Rôle par défaut pour les patients
        ]);

        // 3. Envoi de l'email de vérification
        event(new Registered($user));

        // 4. Redirection vers la page de connexion
        return redirect()->route('login')
            ->with(
                'success',
                'Votre compte a été créé avec succès. Veuillez consulter votre boîte e-mail pour confirmer votre adresse avant de vous connecter.'
            );
    }
}