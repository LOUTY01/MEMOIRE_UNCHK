<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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
        ]);

        Contact::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Votre message a été envoyé avec succès.');
    }
}