<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{

    public function index() {
        $posts = DB::table('posts')->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'post_title' => 'required|max:20',
            'post_content' => 'required|max:200'
        ]);

        $post = new Post();
        $post->title = $request->input('post_title');
        $post->content = $request->input('post_content');
        $post->save();

        return redirect("/posts");
    }
}
