<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
        public function show()
        {
		//$posts = DB::table('posts')->get();
                $posts = DB::table('posts')
		->whereIdOrSlug(1,'post-3')
		->get();
                return view('post.show', ['posts' => $posts]);
        }
}
