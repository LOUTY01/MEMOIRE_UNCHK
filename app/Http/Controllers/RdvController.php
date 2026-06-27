<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RdvController extends Controller
{
public function index()
{
    return view('rendezvous');
}
public function store(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'telephone' => 'required',
        'service' => 'required',
        'date' => 'required',
        'heure' => 'required',
        'paiment' => 'required',
        'paiment' => 'required',
    ]);
$modePaiement = $request->paiement == 'wave' ? 'Wave 💙' : 'Orange Money 🧡';
    return "✅ Réservation reçue pour " . $request->nom . " au " . $request->telephone . ". Service: " . $request->service . ". paiment:" . $modePaiement;
    }
}
    