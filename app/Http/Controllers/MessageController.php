<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        $user = auth()->user();
        $messages = Message::where('agent', $user->name)->get();
        return view('Message',['user'=>$user,'messages'=>$messages]);
    }

    // VotreController.php

public function supprimerMessage($id)
{
    // Logique pour supprimer le message avec l'ID donné
    Message::find($id)->delete();

    // Rediriger ou effectuer d'autres actions après la suppression
    return redirect()->back()->with('success', 'Message supprimé avec succès');
}

}
