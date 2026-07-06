<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Models\Medecin;
use App\Models\RendezVous;


/*
|--------------------------------------------------------------------------
| CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\AccueilUtilisateurController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\GoogleController;



/*
|--------------------------------------------------------------------------
| PAGES PUBLIQUES
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('accueil'))->name('accueil');
Route::get('/service', fn() => view('service'))->name('service');
Route::get('/propos', fn() => view('propos'))->name('propos');
Route::get('/contact', fn() => view('contact'))->name('contact');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/connexion', fn() => view('connexion'))->name('login');
Route::get('/inscription', fn() => view('inscription'))->name('register');

Route::post('/inscription', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('accueil');
})->name('logout');

/*
|--------------------------------------------------------------------------
| EMAIL VERIFICATION
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/email/verify', fn () => view('auth.verify-email'))
        ->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('accueil.utilisateur')
            ->with('success', 'Email vérifié avec succès.');
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('success', 'Lien de vérification envoyé.');
    })->middleware('throttle:6,1')->name('verification.send');
});

/*
|--------------------------------------------------------------------------
| RENDEZ-VOUS (IMPORTANT)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

   Route::get('/rendezvous', [RendezVousController::class, 'index'])
    ->name('rendezvous');

    Route::post('/rendezvous', [RendezVousController::class, 'store'])
        ->name('rendezvous.store');

    Route::get('/rendezvous/{id}/edit', [RendezVousController::class, 'edit'])
        ->name('rendezvous.edit');

    Route::put('/rendezvous/{id}', [RendezVousController::class, 'update'])
        ->name('rendezvous.update');

    Route::delete('/rendezvous/{id}', [RendezVousController::class, 'destroy'])
        ->name('rendezvous.destroy');
});

/*
|--------------------------------------------------------------------------
| PAIEMENT
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| PAIEMENT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // Affiche le dashboard (pour les admins)
    Route::get('/paiement', [PaiementController::class, 'index'])
        ->name('paiement.index');

    // Affiche la page de paiement pour un RDV spécifique
    Route::get('/paiement/{id}', [PaiementController::class, 'create'])
        ->name('paiement.create');

    // Traite le formulaire de paiement
    Route::post('/paiement', [PaiementController::class, 'store'])
        ->name('paiement.store');

    // Liste des tickets de l'utilisateur (déplacé ici pour cohérence)
    Route::get('/mes-tickets', [PaiementController::class, 'ticket'])
        ->name('mes.tickets');
});

/*
|--------------------------------------------------------------------------
| USER DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/accueil-utilisateur', [AccueilUtilisateurController::class, 'index'])
        ->name('accueil.utilisateur');
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/administrateur/dashboard', [AdminController::class, 'index'])
        ->name('administrateur.dashboard');
});

/*
|--------------------------------------------------------------------------
| MEDECIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/medecin/dashboard', [MedecinController::class, 'index'])
        ->name('medecin.dashboard');
});

/*
|--------------------------------------------------------------------------
| MÉDECINS
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/medecins', [MedecinController::class, 'index'])
        ->name('medecins.index');

    Route::get('/medecins/create', [MedecinController::class, 'create'])
        ->name('medecins.create');

    Route::post('/medecins', [MedecinController::class, 'store'])
        ->name('medecins.store');
});

/*
|--------------------------------------------------------------------------
| AJAX MÉDECINS
|--------------------------------------------------------------------------
*/

Route::get('/medecins-by-specialite', function (Request $request) {

    $specialite = $request->get('specialite');

    if (!$specialite) {
        return response()->json([]);
    }

    return response()->json(
        Medecin::where('specialite', $specialite)
            ->select('id', 'prenom', 'nom')
            ->get()
    );
});

Route::get('/search-medecins', [MedecinController::class, 'search'])
    ->name('medecins.search');

Route::get('/mot-de-passe-oublie', function () {
    return view('auth.passwords.email');
})->name('password.request');

Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])
    ->name('google.login');

Route::get('/auth/google/callback', [GoogleController::class, 'callback'])
    ->name('google.callback');
Route::get('/landing', function () {
    return view('accueil');
})->name('landing');

Route::get('/mes-tickets', function () {

    // 🔍 DEBUG TEMPORAIRE
    

    $tickets = RendezVous::where('user_id', Auth::id())
        ->with('medecin')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('ticket', compact('tickets'));

})->name('mes.tickets');

Route::post('/contact', function (Request $request) {

    // Exemple simple (tu peux adapter)
    $request->validate([
        'nom' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Ici tu peux enregistrer en DB ou envoyer email
    // Contact::create([...]);

    return back()->with('success', 'Message envoyé avec succès ✔');
})->name('contact.store');

