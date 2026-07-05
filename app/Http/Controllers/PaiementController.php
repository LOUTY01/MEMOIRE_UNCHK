<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Paiement;

class PaiementController extends Controller
{
    /**
     * DASHBOARD ADMIN (STATISTIQUES PAIEMENT)
     */
    public function index()
    {
        $doctorCount  = User::where('role', 'medecin')->count();
        $patientCount = User::where('role', 'visiteur')->count();
        $adminCount   = User::where('role', 'administrateur')->count();

        $totalRevenusPayes = RendezVous::where('status', 'payé')
            ->whereNotNull('montant')
            ->where('montant', '>', 0)
            ->sum('montant');

        $recentAppointments = RendezVous::with(['user', 'medecin'])
            ->latest()
            ->take(5)
            ->get();

        $unreadNotificationsCount = 0;

        return view('administrateur.dashboard', compact(
            'doctorCount',
            'patientCount',
            'adminCount',
            'recentAppointments',
            'totalRevenusPayes',
            'unreadNotificationsCount'
        ));
    }

    /**
     * PAGE PAIEMENT
     */
    public function create($id)
    {
        $rendezVous = RendezVous::with('medecin')->findOrFail($id);

       return view('paiement', compact('rendezVous'));
    }

    /**
     * TRAITEMENT PAIEMENT
     */
   public function store(Request $request)
{
    $request->validate([
        'rendezvous_id' => 'required|exists:rendez_vous,id',
        'operateur' => 'required|string'
    ]);

    $rendezVous = RendezVous::findOrFail($request->rendezvous_id);

    // (optionnel) enregistrer paiement
    Paiement::create([
        'user_id' => Auth::id(),
        'rendez_vous_id' => $rendezVous->id,
        'operateur' => $request->operateur,
        'montant' => $rendezVous->montant ?? 15500,
        'statut' => 'en_attente',
        'reference' => 'SAMA-' . rand(10000, 99999),
    ]);

    // 🔥 REDIRECTION VERS TON LIEN DE PAIEMENT
    if ($request->operateur === 'Wave') {
        return redirect()->away('https://pay.wave.com/TON-LIEN');
    }

    if ($request->operateur === 'Orange Money') {
        return redirect()->away('https://orange-money.com/TON-LIEN');
    }

    return back();
}
    /**
     * 🎟️ TICKETS UTILISATEUR
     */
    public function ticket()
    {
        $tickets = RendezVous::with(['user', 'medecin'])
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('ticket', compact('tickets'));
    }
}