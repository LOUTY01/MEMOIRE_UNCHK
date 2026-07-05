<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RendezVous;
use App\Models\Paiement;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Dashboard administrateur
     */
    public function index()
    {
        // 1. STATS UTILISATEURS
        $doctorCount = User::where('role', 'medecin')->count();
        $patientCount = User::where('role', 'visiteur')->count();
        $adminCount   = User::where('role', 'administrateur')->count();

        // 2. REVENUS PAYÉS
        $totalRevenusPayes = Paiement::where('statut', 'payé')->sum('montant');

        // 3. RENDEZ-VOUS RÉCENTS
        $recentAppointments = RendezVous::with(['user', 'medecin'])
            ->latest()
            ->take(5)
            ->get();

        // 4. RÉCUPÉRATION DU PREMIER RENDEZ-VOUS POUR LA VUE
        $rendezVous = $recentAppointments->first();

        // 5. AUTRES VARIABLES
        $unreadNotificationsCount = 0;

        // 6. RETOUR VIEW
        return view('administrateur.dashboard', compact(
            'doctorCount',
            'patientCount',
            'adminCount',
            'recentAppointments',
            'rendezVous',
            'totalRevenusPayes',
            'unreadNotificationsCount'
        ));
    }
}