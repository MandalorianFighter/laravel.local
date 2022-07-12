<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
        public function show()
        {
		//$posts = DB::table('posts')->get();
                $post = new Post;
	
	        $post->title = 'new_post_title';
	        $post->slug  = 'new_post_text';
	
	        $post->save();
                $posts = Post::all();
                return view('post.show', ['posts' => $posts]);
        }
}
