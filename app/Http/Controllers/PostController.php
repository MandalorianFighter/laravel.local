<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function show(Request $request)
        {
        $id = $request->id;
        $post = Post::find($id);
        return view('post.show', ['post' => $post]);
        }


	public function form(Request $request)
	{
            //if($request->has('title') and $request->has('slug')) {
        //$title = $request->input('title');
        //$slug  = $request->input('slug');

        //return view('post.form', [ 'title' => $title, 'slug' => $slug ]);
            //}
            $data = $request->except(['text', 'slug']);
 	    return view('post.form', [ 'data' => $data ]);
	}
}
