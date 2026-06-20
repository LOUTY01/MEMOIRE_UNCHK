<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            $user = User::create([
                'nom' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => bcrypt('google'),
                'email_verified_at' => now(),
            ]);
        }

        Auth::login($user);

        return redirect()->route('accueil.utilisateur');
    }
}