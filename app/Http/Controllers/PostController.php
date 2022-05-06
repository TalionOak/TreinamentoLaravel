<?php

namespace App\Http\Controllers;

use App\Classes\PostObj;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Fluent;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StoreUpdatePost $request)
    {

        $post = Post::create($request->all());

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post criado!');;
    }

    public function show($id)
    {

        if ($post = Post::find($id)) {
            return view('posts.show', ['post' => $post]);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->route('posts.index');
        }

        $post->delete();
        return redirect()->route('posts.index')->with('message', "Post deletado!");
    }

    public function edit($id)
    {
        if ($post = Post::find($id)) {
            return view('posts.edit', ['post' => $post]);
        }

        return redirect()->back();
    }

    public function put(StoreUpdatePost $request, Post $post, $id)
    {
       
       return $post->atualizar($id,$request->validated());
    }

    public function search(Request $request)
    {
        $posts = Post::Where('title', 'LIKE', "%{$request->search}%")->get();

        return view('posts.index', ['posts' => $posts]);
    }
}
