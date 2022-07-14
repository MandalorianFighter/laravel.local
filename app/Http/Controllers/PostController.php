<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
//use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function show(Request $request)
        {
        $id = $request->id;
        $post = Post::find($id);
        //$comments = Comment::with(['post', 'user'])->where('post_id', $id)->get();
        return view('post.show', ['post' => $post]);
        }

	public function result(Request $request)
	{
	$title = $request->input('title');
	$slug  = $request->input('slug');

	return view('post.result', [ 'title' => $title, 'slug' => $slug ]);
	}

	public function form(Request $request)
	{
            if($request->has('title') and $request->has('slug')) {
        $title = $request->input('title');
        $slug  = $request->input('slug');

        return view('post.form', [ 'title' => $title, 'slug' => $slug ]);
            }

 	    return view('post.form');
	}
}
