<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
        public function show()
        {
		//$post = Post::find(5);
                //$post->delete();
                //$post = Post::withTrashed()->where('id', 5)->restore();
                
                $posts = Post::all();
                return view('post.show', ['posts' => $posts]);
        }
}
