<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CreatePostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index()
    {
        return view('createpost');
    }

    /**
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $nombreArchivo = $request->cover_name->getClientOriginalName();
        Post::create($request->except(['cover_name']) + ['cover_name' => $nombreArchivo]);
        $request->cover_name->storeAs('public/covers', $request->cover_name->getClientOriginalName());

        return redirect('/');
    }
}

