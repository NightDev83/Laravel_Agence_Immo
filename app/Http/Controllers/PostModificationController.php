<?php

namespace App\Http\Controllers;

use App\Models\PostController;
use Illuminate\Http\Request;

class PostModificationController extends Controller
{
    public function edit($id)
    {
        $user = auth()->user();
        $post = PostController::find($id);
        if($post->agent !== $user->name){
            return redirect()->route('Gestion');
        }

        if (!$post) {
            abort(404); // ou redirigez vers une page d'erreur
        }

        return view('PostModification', compact('post'), ['user'=>$user , 'post'=>$post]);
    }
    
    public function update(Request $request, $id)
    {
        $post = PostController::find($id);

        $disponible = filter_var($request->input('disponible'), FILTER_VALIDATE_BOOLEAN);
        $exterieur = filter_var($request->input('exterieur'), FILTER_VALIDATE_BOOLEAN);



        $updateData =[
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lieux' => $request->input('lieux'),
            'surface' => $request->input('surface'),
            'pieces' => $request->input('pieces'),
            'prix' => $request->input('prix'),
            'disponible' => $disponible,
            'energie'=> $request->input('energie'),
            'type_de_bien' => $request->input('typedebien'),
            'exterieur' => $exterieur,
            'type_de_vente'=>$request ->input('typedevente'),
            'surface_exterieur'=>$request->input('surfaceexterieur')
        ];

        if ($request->hasFile('photo')) {
            $photoContent = $request->file('photo')->get();
            $encodedPhoto = base64_encode($photoContent);
            $updateData['photo'] = $encodedPhoto;
        }
        
        $post->update($updateData);


        return redirect()->route('Gestion')->with('succes');
    }
}
