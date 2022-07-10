<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
        public function show()
        {
		return view('post.show', ['title' => 'page title', 'text' => ['one', 'two', 'three', 'four', 'five']]);
	}
}
