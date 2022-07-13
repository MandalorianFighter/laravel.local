<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
        public function show($id)
        {
		//$post = Post::find(5);
                //$post->delete();
                //$post = Post::withTrashed()->where('id', 5)->restore();
                
                $post = Post::find($id);
                $comments = Comment::where('post_id', $id)->get();
                return view('post.show', ['post' => $post, 'comments' => $comments]);
        }
}
