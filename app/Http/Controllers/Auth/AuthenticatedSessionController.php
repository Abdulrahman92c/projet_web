<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller

{

    public function showLoginForm()
    {
        return view('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification a réussi
            return redirect()->intended('connecte');
        } else {
            // L'authentification a échoué
            return redirect()->route('/')->withErrors([
                'email' => 'Les identifiants de connexion sont invalides.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
