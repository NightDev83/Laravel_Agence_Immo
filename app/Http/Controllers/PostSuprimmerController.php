<?php

namespace App\Http\Controllers;

use App\Models\PostController;
use Illuminate\Http\Request;

class PostSuprimmerController extends Controller
{
    public function supprimer($id)
    {
        $post = PostController::find($id);

        if ($post) {
            $post->delete();
        }

        return redirect()->route('Gestion');
    }
}
