<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CreatePostController extends Controller
{
    public function index() {
        return view( 'createpost' );
    }
  
    public function store(Request $request) {
      $nombreArchivo = $request->cover_name->getClientOriginalName();
      Post::create($request->except(['cover_name']) + ['cover_name'=>$nombreArchivo]);
      
      $request->cover_name->storeAs('public/covers', $request->cover_name->getClientOriginalName());
      return redirect('/');
    }
  }

