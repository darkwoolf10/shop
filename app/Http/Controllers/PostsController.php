<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show(Post $post) {
//      $post = DB::table('posts')->find($id);
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view("posts.create");
    }
    public function store() {
        $post = new Post;
        $post->title= request('title');
        $post->alias= request('alias');
        $post->intro= request('intro');
        $post->body= request('body');
        $post->save();
        return redirect('/');
    }
}
