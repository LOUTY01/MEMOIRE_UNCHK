Voici votre fichier de routes complet, propre et unifié.

Pour résoudre le conflit, j'ai conservé le traitement du formulaire de contact (`/contact/store`) issu de la branche `main`, tout en intégrant proprement les routes de maquettes/tests et les commentaires explicatifs issus de la branche `medecins`. Les doublons de définitions de routes (`/`, `/contact`, etc.) présents dans la zone de conflit ont été nettoyés pour éviter toute erreur de collision dans Laravel.

```php
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
use App\Http\Controllers\DoctorDashboardController;

/*
|--------------------------------------------------------------------------
| PAGES PUBLIQUES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/service', fn () => view('service'))->name('service');
Route::get('/services', fn () => view('services'))->name('services'); // Conservé pour la navbar medecins
Route::get('/propos', fn () => view('propos'))->name('propos');
Route::get('/rendez-vous', fn () => view('rendezvous'))->name('rendezvous');
Route::get('/contact', fn () => view('contact'))->name('contact');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/connexion', fn () => view('connexion'))->name('login');
Route::get('/inscription', fn () => view('inscription'))->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


/*
|--------------------------------------------------------------------------
| LOGOUT (IMPORTANT FIX)
|--------------------------------------------------------------------------
*/

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('accueil');

})->name('logout');


/*
|--------------------------------------------------------------------------
| RESET PASSWORD
|--------------------------------------------------------------------------
*/

Route::get('/mot-de-passe-oublie', fn () => view('auth.forgot-password'))
    ->name('password.request');

Route::post('/mot-de-passe-oublie', function (Request $request) {

    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink($request->only('email'));

    return $status === Password::RESET_LINK_SENT
        ? back()->with('success', 'Lien envoyé')
        : back()->withErrors(['email' => 'Email introuvable']);
})->name('password.email');

Route::get('/reset-password/{token}', fn ($token) =>
    view('auth.reset-password', ['token' => $token])
)->name('password.reset');

Route::post('/reset-password', function (Request $request) {

    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
        'token' => 'required'
    ]);

    $status = Password::reset(
        $request->only('email','password','password_confirmation','token'),
        function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('success', 'Mot de passe modifié')
        : back()->withErrors(['email' => 'Erreur']);
})->name('password.update');


/*
|--------------------------------------------------------------------------
| EMAIL VERIFICATION
|--------------------------------------------------------------------------
*/

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (Request $request) {

    $user = \App\Models\User::find($request->route('id'));

    if (!$user) {
        return redirect()->route('login');
    }

    if (!hash_equals(
        (string) $request->route('hash'),
        sha1($user->getEmailForVerification())
    )) {
        return "Lien invalide";
    }

    if (!$user->hasVerifiedEmail()) {
        $user->email_verified_at = now();
        $user->save();
    }

    return redirect()->route('accueil')
        ->with('success', 'Email vérifié');

})->middleware(['signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {

    if ($request->user()->hasVerifiedEmail()) {
        return back();
    }

    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Email envoyé !');

})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


/*
|--------------------------------------------------------------------------
| MÉDECINS (PROTÉGÉ)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/search-medecins', [MedecinController::class, 'search'])
        ->name('medecins.search');

    Route::get('/recherche-medecin', [MedecinController::class, 'index'])
        ->name('medecins.index');
});


/*
|--------------------------------------------------------------------------
| DASHBOARD UTILISATEUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/accueil-utilisateur', [AccueilUtilisateurController::class, 'index'])
        ->name('accueil.utilisateur');
});


/*
|--------------------------------------------------------------------------
| GOOGLE LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/auth/google', [GoogleController::class, 'redirect'])
    ->name('google.login');

Route::get('/auth/google/callback', [GoogleController::class, 'callback']);


/*
|--------------------------------------------------------------------------
| CONTACT (TRAITEMENT DU FORMULAIRE)
|--------------------------------------------------------------------------
*/

Route::post('/contact/store', [ContactController::class, 'store'])
    ->name('contact.store');


/*
|--------------------------------------------------------------------------
| ROUTES DES MAQUETTES SAMA SANTÉ (BRANCHE MEDECINS)
|--------------------------------------------------------------------------
*/

Route::get('/maquette-client', fn () => view('medecins'))->name('medecins');
Route::get('/admin', fn () => view('admin'))->name('admin'); 

```