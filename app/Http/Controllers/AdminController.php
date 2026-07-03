<?php

namespace App\Http\Controllers;

use App\Models\User; // Modèle unique pour toute la table
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // On compte les utilisateurs selon leur rôle exact en base de données
        $doctorCount = User::where('role', 'medecin')->count();
        $patientCount = User::where('role', 'visiteur')->count();
        $adminCount = User::where('role', 'administrateur')->count();

        // Le chemin pointe désormais vers 'resources/views/administrateur/dashboard.blade.php'
        return view('administrateur.dashboard', compact('doctorCount', 'patientCount', 'adminCount'));
    }
}