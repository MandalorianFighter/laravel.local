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
            //$data = $request->except(['text', 'slug']);

            if ($request->isMethod('post')) {
            $path = 'POST';
            } elseif ($request->isMethod('get')) {
            $path = 'GET';
            }
            $title = $request->input('text.title');
	    $slug = $request->input('text.slug');
            $text = $request->input('text.text');
 	    return view('post.form', [ 'title' => $title, 'slug' => $slug, 'text' => $text, 'path' => $path ]);
	}
}
