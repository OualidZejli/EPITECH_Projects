<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;

class PostController extends Controller
{
    public function index()
    {
        $posts = Advertisement::all();
        
        return view('accueil', compact('posts'));
    }

    public function show($id)
    {
        $post = Advertisement::findOrFail($id);

        return view('posts', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        Advertisement::create([
            'title' => $request->title,
            'content' => $request->content,
            'location' => $request->location
        ]);

        return view('created');
    }

}
