<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AccueilUtilisateurController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\AppointmentController;
/*
|--------------------------------------------------------------------------
| PAGES PUBLIQUES
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('accueil'))->name('accueil');
Route::get('/service', fn () => view('service'))->name('service');
Route::get('/services', fn () => view('services'))->name('services');
Route::get('/propos', fn () => view('propos'))->name('propos');
Route::get('/contact', fn () => view('contact'))->name('contact');

/*
|--------------------------------------------------------------------------
| AUTHENTIFICATION
|--------------------------------------------------------------------------
*/

Route::get('/connexion', fn () => view('connexion'))->name('login');
Route::get('/inscription', fn () => view('inscription'))->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.post');

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('accueil');

})->name('logout');

/*
|--------------------------------------------------------------------------
| GOOGLE
|--------------------------------------------------------------------------
*/

Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])
    ->name('google.login');

Route::get('/auth/google/callback', [GoogleController::class, 'callback'])
    ->name('google.callback');

/*
|--------------------------------------------------------------------------
| MOT DE PASSE OUBLIÉ
|--------------------------------------------------------------------------
*/

Route::get('/mot-de-passe-oublie', [ForgotPasswordController::class, 'create'])
    ->name('password.request');

Route::post('/mot-de-passe-oublie', [ForgotPasswordController::class, 'store'])
    ->name('password.email');

Route::get('/reinitialisation/{token}', [ResetPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('/reinitialisation', [ResetPasswordController::class, 'store'])
    ->name('password.update');

/*
|--------------------------------------------------------------------------
| RENDEZ-VOUS + PAIEMENT
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Page de réservation
    Route::get('/rendezvous', [RendezVousController::class, 'create'])
        ->name('rendezvous');

    // Enregistrement du rendez-vous
    Route::post('/rendezvous', [RendezVousController::class, 'store'])
        ->name('rendezvous.store');

    // Page de paiement
    Route::get('/paiement/{rendez_vous}', [PaiementController::class, 'create'])
        ->name('paiement.page');

    // Validation du paiement
    Route::post('/paiement', [PaiementController::class, 'store'])
        ->name('paiement.store');

    // Recherche médecins
    Route::get('/search-medecins', [MedecinController::class, 'search'])
        ->name('medecins.search');
});

/*
|--------------------------------------------------------------------------
| ESPACE UTILISATEUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/accueil-utilisateur', [AccueilUtilisateurController::class, 'index'])
        ->name('accueil.utilisateur');

});

/*
|--------------------------------------------------------------------------
| ESPACE ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/administrateur/dashboard', [AdminController::class, 'index'])
        ->name('administrateur.dashboard');

});

/*
|--------------------------------------------------------------------------
| AJAX - MÉDECINS PAR SERVICE
|--------------------------------------------------------------------------
*/

Route::get('/get-medecins/{service}', function ($service) {

    $medecins = User::where('role', 'medecin')
        ->where('service', $service)
        ->orderBy('nom')
        ->get([
            'id',
            'nom',
            'service'
        ]);

    return response()->json($medecins);

})->name('medecins.par.service');

Route::middleware(['auth'])->group(function () {
    // Cette ligne va faire fonctionner {{ route('rendezvous') }} dans votre code HTML
    Route::get('/rendezvous', [RendezVousController::class, 'create'])->name('rendezvous');
    
    Route::post('/rendezvous/store', [RendezVousController::class, 'store'])->name('rendezvous.store');
    Route::get('/paiement/{id}', [RendezVousController::class, 'paiement'])->name('paiement.page');
});
Route::get('/paiement/ticket/{id}', [PaiementController::class, 'ticket'])->name('paiement.ticket');

Route::get('/mes-tickets/{id?}', [App\Http\Controllers\PaiementController::class, 'ticket'])->name('mes.tickets')->middleware('auth');
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');