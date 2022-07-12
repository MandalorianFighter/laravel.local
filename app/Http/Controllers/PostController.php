<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
        public function show()
        {
		//$posts = DB::table('posts')->get();
                $posts = Post::all();
                return view('post.show', ['posts' => $posts]);
        }
}
