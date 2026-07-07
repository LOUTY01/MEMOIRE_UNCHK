<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RendezVous;
use App\Models\Paiement;
use App\Models\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Dashboard administrateur
     */
    public function index()
    {
        $doctorCount  = User::where('role', 'medecin')->count();
        $patientCount = User::where('role', 'visiteur')->count();
        $adminCount   = User::where('role', 'administrateur')->count();
        
        $totalRevenusPayes = Paiement::where('statut', 'payé')->sum('montant');
        $recentUsers = User::latest()->take(5)->get();

        return view('administrateur.dashboard', compact(
            'doctorCount', 'patientCount', 'adminCount', 'totalRevenusPayes', 'recentUsers'
        ));
    }

    /**
     * Gestion des Médecins
     */
    public function medecins(Request $request)
    {
        $query = Medecin::leftJoin('users', 'medecins.user_id', '=', 'users.id')
            ->select('medecins.*', 'users.email as user_email');

        if ($request->filled('specialite')) {
            $query->where('medecins.specialite', $request->specialite);
        }

        if ($request->filled('email')) {
            $query->where('users.email', 'like', '%' . $request->email . '%');
        }

        $medecins = $query->get();
        return view('administrateur.medecins', compact('medecins'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        return view('administrateur.medecins-create');
    }

    /**
     * Enregistrer un nouveau médecin et son compte utilisateur
     */
    public function store(Request $request)
    {
        // 1. Validation
        $request->validate([
            'nom'            => 'required|string|max:255',
            'prenom'         => 'required|string|max:255',
            'specialite'     => 'required|string|max:255',
            'email'          => 'required|email|unique:users,email',
            'password'       => 'required|min:6',
            'sexe'           => 'required',
            'telephone'      => 'required',
            'date_naissance' => 'required|date',
        ]);

        // 2. Transaction pour garantir la cohérence
        DB::transaction(function () use ($request) {
            // Création utilisateur (avec 'nom' au lieu de 'name' comme dans votre DB)
            $user = User::create([
                'nom'            => $request->prenom . ' ' . $request->nom,
                'email'          => $request->email,
                'password'       => Hash::make($request->password),
                'role'           => 'medecin',
                'telephone'      => $request->telephone,
                'sexe'           => $request->sexe,
                'date_naissance' => $request->date_naissance, 
            ]);

            // Création médecin
         Medecin::create([
    'user_id'        => $user->id,
    'nom'            => $request->nom,
    'prenom'         => $request->prenom,
    'specialite'     => $request->specialite,
    'date_naissance' => $request->date_naissance,
    'age'            => \Carbon\Carbon::parse($request->date_naissance)->age, // Calcul ici
]);
        });

        return redirect()->route('admin.medecins')->with('success', 'Médecin ajouté avec succès !');
    }

    /**
     * Liste des Rendez-vous
     */
    public function rendezvousList()
    {
        $rendezvous = RendezVous::with(['user', 'medecin'])->latest()->get();
        return view('administrateur.rendezvous', compact('rendezvous'));
    }

    /**
     * Liste des Tickets (Paiements)
     */
    public function ticketsList()
    {
        $tickets = RendezVous::where('status', 'payé')->with(['user', 'medecin'])->get();
        return view('administrateur.tickets', compact('tickets'));
    }
}