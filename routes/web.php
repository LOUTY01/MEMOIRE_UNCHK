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

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/propos', function () {
    return view('propos');
})->name('propos');

Route::get('/rendez-vous', function () {
    return view('rendezvous');
})->name('rendezvous');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');