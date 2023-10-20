<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InformationController extends Controller
{
    public function view()
    {
        $user = auth()->user();
        return view('Information',['user'=>$user]);
    }

    public function modification(Request $request)
    {
        
        $request->validate([
            'nom' => 'nullable|string|max:100|min:3',
            'email' => 'nullable|string|email|max:255',
            'tel'=> 'nullable|string|max:20',
            'password' => 'nullable|string|min:6|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Limitez les types de fichiers et la taille du fichier
        ],);

        // Récupération de l'utilisateur connecté
        $utilisateur = auth()->user();

        // Mise à jour des champs modifiables
        if ($request->filled('tel')) {
            $utilisateur->tel = $request->input('tel');
        }

        if ($request->filled('nom')) {
            $utilisateur->name = $request->input('nom');
        }

        if ($request->filled('email')) {
            $utilisateur->email = $request->input('email');
        }

        // Vérification si un nouveau mot de passe a été fourni
        if ($request->filled('password')) {
            $utilisateur->password = Hash::make($request->input('password'));
        }

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->get();
            $encodedAvatar = base64_encode($avatarPath);
            $utilisateur->photo = $encodedAvatar;
        }   

        // Sauvegarde des modifications
        $utilisateur->save();

        return redirect()->route('Home')->with('success', 'Vos informations ont été mises à jour avec succès.');
    }
}
