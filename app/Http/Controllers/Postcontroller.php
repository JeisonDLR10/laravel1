<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Psy\CodeCleaner\ReturnTypePass;
use  Illuminate\Http\Request;

class Postcontroller extends Controller {
    public function index(){
        $posts = Post::get();
        return view ('posts.index', ['posts'=> $posts]);
    }

    public function show(Post $post){

        return view ('posts.show', ['post'=> $post]);
    }

    public function create(){
    
        return view ('posts.create', ['post'=> new Post]);
}

        public function store(Request $request){
            $request->validate([
                'titulo'=> ['required'],
                'parrafo'=> ['required'],
            ]);
            $post= new Post;
            $post->titulo = $request->input('titulo');
            $post->parrafo = $request->input('parrafo');
            $post->save();
            return to_route('posts.index');
}

        public function edit(Post $post){
            return view ('posts.edit', ['post'=> $post]);
}

        public function update(Request $request, Post $post){
            $request->validate([
                'titulo'=> ['required'],
                'parrafo'=> ['required'],
            ]);

            $post->titulo = $request->input('titulo');
            $post->parrafo = $request->input('parrafo');
            $post->save();
            return to_route('posts.show', $post);

}

public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status', 'Post deleted');
    }

}