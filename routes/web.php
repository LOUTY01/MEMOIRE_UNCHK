<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\AccueilUtilisateurController;

/*
|--------------------------------------------------------------------------
| PAGES PUBLIQUES
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('accueil'))->name('accueil');

Route::get('/services', fn () => view('service'))->name('services');

Route::get('/propos', fn () => view('propos'))->name('propos');

Route::get('/rendez-vous', fn () => view('rendezvous'))->name('rendezvous');

Route::get('/contact', fn () => view('contact'))->name('contact');

/*
|--------------------------------------------------------------------------
| AUTH - VUES
|--------------------------------------------------------------------------
*/

Route::get('/connexion', fn () => view('connexion'))->name('login');

Route::get('/inscription', fn () => view('inscription'))->name('register');

/*
|--------------------------------------------------------------------------
| AUTH - ACTIONS
|--------------------------------------------------------------------------
*/

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.post');

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');

})->name('logout');

/*
|--------------------------------------------------------------------------
| RESET PASSWORD
|--------------------------------------------------------------------------
*/

Route::get('/mot-de-passe-oublie', fn () => view('auth.forgot-password'))
    ->name('password.request');

Route::post('/mot-de-passe-oublie', function (Request $request) {

    $request->validate([
        'email' => 'required|email'
    ]);

    $status = Password::sendResetLink(
        $request->only('email')
    );

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
        $request->only(
            'email',
            'password',
            'password_confirmation',
            'token'
        ),
        function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')
            ->with('success', 'Mot de passe modifié')
        : back()->withErrors(['email' => 'Erreur']);

})->name('password.update');

/*
|--------------------------------------------------------------------------
| EMAIL VERIFICATION
|--------------------------------------------------------------------------
*/

Route::get('/email/verify', fn () => view('auth.verify-email'))
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (
    Request $request,
    $id,
    $hash
) {

    $user = \App\Models\User::findOrFail($id);

    if (!hash_equals(
        (string) $hash,
        sha1($user->getEmailForVerification())
    )) {
        abort(403);
    }

    if (!$user->email_verified_at) {
        $user->email_verified_at = now();
        $user->save();
    }

    Auth::login($user);

    return redirect()->route('accueil.utilisateur');

})->name('verification.verify');

Route::post('/email/verification-notification', function (
    Request $request
) {

    $request->user()->sendEmailVerificationNotification();

    return back()->with('success', 'Email envoyé');

})->middleware(['auth', 'throttle:6,1'])
  ->name('verification.send');

/*
|--------------------------------------------------------------------------
| MÉDECINS
|--------------------------------------------------------------------------
*/

Route::get('/search-medecins', [MedecinController::class, 'search'])
    ->middleware('auth')
    ->name('medecins.search');

Route::get('/recherche-medecin', [MedecinController::class, 'index'])
    ->name('medecins.index');

/*
|--------------------------------------------------------------------------
| PAGE UTILISATEUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get(
        '/accueil-utilisateur',
        [AccueilUtilisateurController::class, 'index']
    )->name('accueil.utilisateur');

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
| ROUTES AJOUTÉES DEPUIS APROPOS
|--------------------------------------------------------------------------
*/

Route::get('/propos-nouveau', function () {
    return view('propos');
})->name('propos-nouveau');

Route::get('/test-nouveau', function () {
    return "<h1>SI TU VOIS CECI, C'EST QUE LE SERVEUR EST BIEN CONNECTÉ</h1>";
});