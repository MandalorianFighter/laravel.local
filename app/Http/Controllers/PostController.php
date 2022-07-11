<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
        public function show()
        {
		//$posts = DB::table('posts')->get();
                DB::table('posts')->insert([
		[
			'title' => 'page1',
			'slug'  => 'slug1',
		],
		[
			'title' => 'page2',
			'slug'  => 'slug2',
		]
	        ]);
                $posts = DB::table('posts')
		->get();
                return view('post.show', ['posts' => $posts]);
        }
}
