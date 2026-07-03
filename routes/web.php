<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AccueilUtilisateurController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RendezVousController;
use App\Models\User;

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

Route::get('/admin', fn () => view('admin'))->name('admin');

/*
|--------------------------------------------------------------------------
| RENDEZ-VOUS
|--------------------------------------------------------------------------
*/

// PAGE RDV
Route::get('/rendez-vous', [RendezVousController::class, 'create'])
    ->middleware('auth')
    ->name('rendezvous.create');

// ENREGISTREMENT RDV
Route::post('/rendez-vous', [RendezVousController::class, 'store'])
    ->middleware('auth')
    ->name('rendezvous.store');

// PAIEMENT
Route::get('/paiement/{id}', [RendezVousController::class, 'paiement'])
    ->middleware('auth')
    ->name('paiement.page');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/connexion', fn () => view('connexion'))->name('login');
Route::get('/inscription', fn () => view('inscription'))->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::post('/logout', function (Request $request) {

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('accueil');

})->name('logout');

/*
|--------------------------------------------------------------------------
| UTILISATEUR / ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/accueil-utilisateur', [AccueilUtilisateurController::class, 'index'])
        ->name('accueil.utilisateur');

    Route::get('/administrateur/dashboard', [AdminController::class, 'index'])
        ->name('administrateur.dashboard');
});

/*
|--------------------------------------------------------------------------
| MÉDECINS PAR SERVICE (AJAX)
|--------------------------------------------------------------------------
*/

Route::get('/get-medecins/{service}', function ($service) {

    $medecins = User::where('role', 'medecin')
        ->where('service', $service)
        ->select('id', 'nom')
        ->get();

    return response()->json($medecins);

});

/*
|--------------------------------------------------------------------------
| SEARCH MÉDECINS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/search-medecins', [MedecinController::class, 'search'])
        ->name('medecins.search');
});