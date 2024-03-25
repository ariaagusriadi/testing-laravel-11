<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        return view('welcome', [
            'posts' => Post::all()
        ]);
    }

    public function store(){

         $post = new Post();
         $post->judul = request('judul');
         $post->body = request('body');
         $post->save();

         return back();
    }
}
