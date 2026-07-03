<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RendezVous;
use Illuminate\Support\Facades\Auth;

class RendezVousController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | PAGE RENDEZ-VOUS
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        // 👉 services uniques depuis les médecins
        $services = User::where('role', 'medecin')
            ->whereNotNull('service')
            ->select('service')
            ->distinct()
            ->get();

        // 👉 médecins affichage initial
        $medecins = User::where('role', 'medecin')->get();

        return view('rendezvous', compact('services', 'medecins'));
    }

    /*
    |--------------------------------------------------------------------------
    | ENREGISTRER RENDEZ-VOUS
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'medecin_id' => 'required|exists:users,id',
            'service' => 'required|string',
            'date' => 'required|date',
            'heure' => 'required',
            'motif' => 'nullable|string'
        ]);

        $rdv = RendezVous::create([
            'user_id' => Auth::id(),
            'medecin_id' => $request->medecin_id,
            'service' => $request->service,
            'date' => $request->date,
            'heure' => $request->heure,
            'motif' => $request->motif,
            'status' => 'en_attente'
        ]);

        return redirect()->route('paiement.page', $rdv->id);
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE PAIEMENT
    |--------------------------------------------------------------------------
    */
    public function paiement($id)
    {
        $rdv = RendezVous::with(['medecin', 'user'])->findOrFail($id);

        return view('paiement', compact('rdv'));
    }
}