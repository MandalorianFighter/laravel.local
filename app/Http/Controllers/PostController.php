<?php
	namespace App\Http\Controllers;

	class PostController extends Controller
	{
         public function show()
	        {
			return view('post.show', ['title' => 'page title', 'text' => ['one', 'two', 'three', 'four', 'five']]);
		}
	}
