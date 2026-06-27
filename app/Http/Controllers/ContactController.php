<?php

namespace App\Http\Controllers;

use App\Models\Soutenance;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_complet'      => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'numero_telephone' => 'required|string|max:30',
            'profession'       => 'required|string|max:255',
            'message'          => 'required|string',
        ], [
            'nom_complet.required'      => 'Le nom complet est requis.',
            'email.required'            => 'L\'email est requis.',
            'email.email'               => 'L\'email doit être valide.',
            'numero_telephone.required' => 'Le numéro de téléphone est requis.',
            'profession.required'       => 'La profession est requise.',
            'message.required'          => 'Le message est requis.',
        ]);

        Soutenance::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès !',
        ]);
    }
}