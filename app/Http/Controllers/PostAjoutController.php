<?php

namespace App\Http\Controllers;

use App\Models\PostController;
use Illuminate\Http\Request;

class PostAjoutController extends Controller
{
    public function ajouter(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'lieux' => 'required|string|max:255',
            'surface' => 'required|numeric',
            'pieces' => 'required|integer',
            'prix' => 'required|numeric',
            'agent' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            ]);

        // Gestion du fichier photo
        if ($request->hasFile('photo')) {
            // Obtenez le contenu du fichier
            $photoContent = $request->file('photo')->get();
            $encodedPhoto= base64_encode($photoContent);
            
        }

        $disponible = filter_var($request->input('disponible'), FILTER_VALIDATE_BOOLEAN);
        $exterieur = filter_var($request->input('exterieur'), FILTER_VALIDATE_BOOLEAN);



        // Création d'une nouvelle instance du modèle Post avec les données du formulaire
        $post = new PostController([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lieux' => $request->input('lieux'),
            'surface' => $request->input('surface'),
            'pieces' => $request->input('pieces'),
            'disponible' => $disponible,
            'prix' => $request->input('prix'),
            'agent' => $request->input('agent'),
            'photo' => $encodedPhoto,
            'type_de_bien' => $request->input('typedebien'),
            'exterieur' => $exterieur,
            'type_de_vente' => $request->input('typedevente'),
            'surface_exterieur' => $request->input('surfaceexterieur'),
            'energie' => $request->input('energie'),
        ]);

        // Enregistrez le post dans la base de données
        $post->save();

        // Redirigez l'utilisateur vers une autre page après l'ajout du post
        return redirect()->route('Gestion')->with('success', 'Annonce ajouter !');
    }
}
