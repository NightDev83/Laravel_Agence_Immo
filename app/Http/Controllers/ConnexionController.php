<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function view()
    {
        return view('Connexion');
    }

    public function connexion(Request $request)
    {
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])
        ){
                return redirect()->route('Home');
             }
             return back()->withInput()->withErrors(['identifiant' => 'Identifiant ou mot de passe incorrect.']);
        

    }

    public function deconexion()
    {
        Auth::logout();
        return redirect()->route('Home');
    }

    protected function attemptLogin(Request $request)
{
    return $this->guard()->attempt(
        $this->credentials($request),
        $request->filled('remember')
    );
}
}
