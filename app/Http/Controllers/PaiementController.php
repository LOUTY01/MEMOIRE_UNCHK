<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RendezVous;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

        return view('paiement', compact(
            'doctorCount',
            'patientCount',
            'adminCount',
            'recentAppointments',
            'totalRevenusPayes'
        ));
    }

    /**
     * PAGE PAIEMENT
     */
    public function create($id)
    {
        $rendezVous = RendezVous::with(['user', 'medecin'])
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('paiement', compact('rendezVous'));
    }

    /**
     * TRAITEMENT PAIEMENT
     */
    public function store(Request $request)
    {
        
        // 1. Validation stricte
        $request->validate([
            'rendezvous_id' => 'required|exists:rendez_vous,id',
            'operateur' => 'required|string|in:Wave,Orange Money'
        ]);

        try {
            // 2. Enregistrement sécurisé du paiement en base
            DB::beginTransaction();

            $rendezVous = RendezVous::findOrFail($request->rendezvous_id);

            Paiement::create([
                'user_id'        => Auth::id(),
                'rendez_vous_id' => $rendezVous->id,
                'operateur'      => $request->operateur,
                'montant'        => $rendezVous->montant ?? 15500,
                'statut'         => 'en_attente',
                'reference'      => 'SAMA-' . strtoupper(bin2hex(random_bytes(3))),
            ]);

            DB::commit();

            // 3. Logique de redirection externe
            if ($request->operateur === 'Wave') {
                return redirect()->away('https://pay.wave.com/m/M_sn_IU0GOdqlFUVY/c/sn/');
            }

            if ($request->operateur === 'Orange Money') {
                return redirect()->away('https://orange-money.com/votre-lien-marchand');
            }

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Erreur paiement : " . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la préparation du paiement.');
        }

        return back()->with('error', 'Opérateur de paiement invalide.');
    }

    /**
     * TICKETS UTILISATEUR
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