<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('posts.post', [
            'posts' => $posts
        ]) ;
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $post = Post::create($request->all());

        return redirect()->route('posts.index');
    }
}
