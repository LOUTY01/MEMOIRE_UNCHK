<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedecinController;

/*
|--------------------------------------------------------------------------
| Routes Web
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/propos', function () {
    return view('propos');
})->name('propos');

Route::get('/rendez-vous', function () {
    return view('rendezvous');
})->name('rendezvous');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/connexion', function () {
    return view('connexion');
})->name('login');

Route::get('/inscription', function () {
    return view('inscription');
})->name('register');

/*
|--------------------------------------------------------------------------
| Recherche de médecins
|--------------------------------------------------------------------------
*/

// Page de recherche
Route::get('/recherche-medecin', [MedecinController::class, 'index'])
    ->name('medecins.index');

// API/AJAX de recherche
Route::get('/api/medecins', [MedecinController::class, 'search'])
    ->name('medecins.search');