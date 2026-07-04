<?php

namespace App\Http\Controllers;

use App\Models\User; 
use App\Models\RendezVous; 
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Affiche le tableau de bord administrateur
     */
    public function index()
    {
        // 1. Comptes des utilisateurs par rôle
        $doctorCount = User::where('role', 'medecin')->count();
        $patientCount = User::where('role', 'visiteur')->count();
        $adminCount = User::where('role', 'administrateur')->count();

        // 2. Récupération des 5 derniers rendez-vous avec Eager Loading
        // On charge les relations 'user' et 'medecin' dès la requête SQL
        $recentAppointments = RendezVous::with(['user', 'medecin'])
                                ->latest()
                                ->take(5)
                                ->get();

        // --- TEST DE DÉBOGAGE (Décommentez la ligne ci-dessous si les noms ne s'affichent toujours pas) ---
        // dd($recentAppointments->toArray()); 

        // 3. Retourne la vue avec les données compactées
        return view('administrateur.dashboard', compact(
            'doctorCount', 
            'patientCount', 
            'adminCount', 
            'recentAppointments'
        ));
    }
}