<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index($id)
    {
        $registro = Post::find($id);
        return view('post')->with('pelicula',$registro);
    }
}
