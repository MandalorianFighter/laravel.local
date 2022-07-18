<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


        public function index()
    {
        $posts = Post::paginate(3);

        return view('post.index', compact('posts'));
    }

        public function create()
    {
        $post = new Post();
        return view('post.create', compact('post'));
    }

        public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required|unique:posts',
            'slug' => 'required|max:100',
        ]);

        $post = new Post();
        $post->fill($data);
        $post->save();

        return redirect()
            ->route('posts.index');
    }


        public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

        public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

        public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $this->validate($request, [
             'title' => 'required|unique:posts,title,' . $post->id,
             'slug' => 'required|max:100',
        ]);

        $post->fill($data);
        $post->save();
        return redirect()
             ->route('posts.index');
    }

        public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
        }

        //$post->delete();
        return redirect()->route('posts.index');
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
