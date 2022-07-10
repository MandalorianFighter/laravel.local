<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
        public function show()
        {
		//$posts = DB::table('posts')->get();
                $posts = DB::table('posts')->select('title', 'slug as post_slug')->get();
                return view('post.show', ['posts' => $posts]);
        }
}
