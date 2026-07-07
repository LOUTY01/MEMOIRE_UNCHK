<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

Route::get('/email/verify', fn () => view('auth.verify-email'))
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function ($id, $hash, Request $request) {
    $user = \App\Models\User::findOrFail($id);

    if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        abort(403, 'Lien invalide.');
    }

    if (!$user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();
        event(new \Illuminate\Auth\Events\Verified($user));
    }

    return redirect()->route('login')
        ->with('success', 'Email vérifié avec succès. Vous pouvez maintenant vous connecter.');
})->middleware(['signed'])->name('verification.verify');

/*
|--------------------------------------------------------------------------
| RENDEZ-VOUS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/rendezvous', [RendezVousController::class, 'index'])->name('rendezvous');
    Route::post('/rendezvous', [RendezVousController::class, 'store'])->name('rendezvous.store');
    Route::get('/rendezvous/{id}/edit', [RendezVousController::class, 'edit'])->name('rendezvous.edit');
    Route::put('/rendezvous/{id}', [RendezVousController::class, 'update'])->name('rendezvous.update');
    Route::delete('/rendezvous/{id}', [RendezVousController::class, 'destroy'])->name('rendezvous.destroy');
});

/*
|--------------------------------------------------------------------------
| PAIEMENT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/paiement', [PaiementController::class, 'index'])->name('paiement.index');
    Route::get('/paiement/{id}', [PaiementController::class, 'create'])->name('paiement.create');
    Route::post('/paiement', [PaiementController::class, 'store'])->name('paiement.store');
    
    // Route de callback pour confirmer le paiement
    Route::get('/paiement/success/{id}', [PaiementController::class, 'success'])->name('paiement.success');
    
    Route::get('/mes-tickets', [PaiementController::class, 'ticket'])->name('mes.tickets');
});

/*
|--------------------------------------------------------------------------
| USER DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/accueil-utilisateur', [AccueilUtilisateurController::class, 'index'])->name('accueil.utilisateur');
});

/*
|--------------------------------------------------------------------------
| ADMIN & MEDECIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/medecin/dashboard', [MedecinController::class, 'index'])->name('medecin.dashboard');
});

/*
|--------------------------------------------------------------------------
| MÉDECINS
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/medecins', [MedecinController::class, 'index'])->name('medecins.index');
    Route::get('/medecins/create', [MedecinController::class, 'create'])->name('medecins.create');
    Route::post('/medecins', [MedecinController::class, 'store'])->name('medecins.store');
});

/*
|--------------------------------------------------------------------------
| AJAX & RECHERCHE
|--------------------------------------------------------------------------
*/

Route::get('/medecins-by-specialite', function (Request $request) {
    $specialite = $request->get('specialite');
    return response()->json($specialite ? Medecin::where('specialite', $specialite)->select('id', 'prenom', 'nom')->get() : []);
});

Route::get('/search-medecins', [MedecinController::class, 'search'])->name('medecins.search');

/*
|--------------------------------------------------------------------------
| GOOGLE AUTH
|--------------------------------------------------------------------------
*/

Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

/*
|--------------------------------------------------------------------------
| DIVERS
|--------------------------------------------------------------------------
*/

Route::get('/landing', fn () => view('accueil'))->name('landing');
Route::post('/contact', function (Request $request) {
    $request->validate(['nom' => 'required', 'email' => 'required|email', 'message' => 'required']);
    return back()->with('success', 'Message envoyé avec succès ✔');
})->name('contact.store');

Route::get('/forgot-password', fn() => view('auth.passwords.email'))->middleware('guest')->name('password.request');
Route::get('/administrateur/dashboard', [AdminController::class, 'index'])
    ->name('administrateur.dashboard');

Route::middleware(['auth'])->prefix('administrateur')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/medecins', [AdminController::class, 'medecins'])->name('admin.medecins');
    Route::get('/patients', [AdminController::class, 'patients'])->name('admin.patients');
    Route::get('/rendezvous', [AdminController::class, 'rendezvousList'])->name('admin.rendezvous');
    Route::get('/tickets', [AdminController::class, 'ticketsList'])->name('admin.tickets');
});

// Assurez-vous d'avoir bien ajouté ->name('dashboard') à la fin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');



Route::prefix('admin')->middleware(['auth'])->group(function () {
    
    
    
    Route::get('/medecins/create', [AdminController::class, 'create'])->name('admin.medecins.create');
    
    Route::post('/medecins/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.medecins.store');

    
    Route::get('/medecins/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.medecins.create');
    Route::get('/medecins/{id}/edit', [AdminController::class, 'edit'])->name('admin.medecins.edit');
    Route::put('/medecins/{id}', [AdminController::class, 'update'])->name('admin.medecins.update');
    Route::delete('/medecins/{id}', [AdminController::class, 'destroy'])->name('admin.medecins.destroy');
});