<?php

namespace App\Http\Controllers;

use App\Models\Post; // Importiere das Post-Modell
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();  // Holt alle Posts aus der Datenbank
        return view('posts.index', compact('posts'));  // Übergibt die Posts an die View
    }
}
