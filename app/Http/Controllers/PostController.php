<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\PostController as ModelsPostController;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class PostController extends Controller
{
    public function view()
    {
        $post = ModelsPostController::simplePaginate(10);
        $user = auth()->user();
        return view('Post',['user'=>$user,'post'=>$post]);
    }

    public function ajout(Request $request)
    {
        $user =auth()->user();
        return view('PostAjout',['user'=>$user]);
    }

    public function annonce($id)
    {
        $user = auth()->user();
        $post = ModelsPostController::find($id);
        $idAleatoire = rand(1, ModelsPostController::max('id')); // Générez un nombre aléatoire entre 1 et le maximum de post ID

        // Récupérez trois posts à partir de l'ID aléatoire
        $postaleatoir = ModelsPostController::where('id', '>=', $idAleatoire)
         ->take(3) // Prenez les trois premiers posts
        ->get();
        
        
        // Assurez-vous que $post n'est pas null avant de continuer
        if ($post) {
            $nomAgent = $post->agent;
        
            // Recherchez l'utilisateur dans la table 'users' en utilisant le nom de l'agent
            $agent = User::where('name', $nomAgent)->first();
        
            // Vérifiez si l'agent a été trouvé
            if ($agent) {
                // Maintenant, vous pouvez passer $post, $user et $agent à votre vue
                return view('PostVisualisation', ['post' => $post, 'user' => $user, 'agent' => $agent,'postaleatoir'=>$postaleatoir]);
            } else {
                // Gérez le cas où l'agent n'est pas trouvé
                // Par exemple, redirigez l'utilisateur vers une page d'erreur
                return redirect()->route('Home');
            }
        } else {
            // Gérez le cas où le post n'est pas trouvé
            // Par exemple, redirigez l'utilisateur vers une page d'erreur
            return redirect()->route('Home');
        }
    }
    public function envoie(Request $request)
    {
        $request->validate([
            'email'=>'required|string',
            'name'=>'required|string',
            'tel'=>'required|string',
            'agent'=>'required|string',
            'ref'=>'required|string',
        ]);

        $Message = new Message([
            'mail'=>$request->input('email'),
            'name'=>$request->input('name'),
            'tel'=>$request->input('tel'),
            'agent'=>$request->input('agent'),
            'ref'=>$request->input('ref'),
        ]);

        $Message->save();

        return redirect()->back()->with('success','message envoyer avec succes');
    }
}
