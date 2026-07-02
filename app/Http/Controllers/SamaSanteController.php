<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamaSanteController extends Controller
{
    public function index()
    {
        return view('medecins');
    }

    public function admin()
    {
        return view('admin'); // ou le nom de votre vue admin
    }
}