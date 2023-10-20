<?php

namespace App\Http\Controllers;

use App\Models\PostController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $post = PostController::simplePaginate(4);
        $user = auth()->user();
        return view('Home', ['user'=>$user,'post'=>$post]);
    }
}
