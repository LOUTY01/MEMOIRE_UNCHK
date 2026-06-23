<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/propos-nouveau', function () {
    return view('propos');
})->name('propos-nouveau');

Route::get('/rendez-vous', function () {
    return view('rendezvous');
})->name('rendezvous');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Change /propos en /test-nouveau
Route::get('/test-nouveau', function () {
    return "<h1>SI TU VOIS CECI, C'EST QUE LE SERVEUR EST BIEN CONNECTÉ</h1>";
});