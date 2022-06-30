<?php
	namespace App\Http\Controllers;

	class PostController extends Controller
	{
         public function show($id)
		{
			return 'post show' . $id;
		}
	}
