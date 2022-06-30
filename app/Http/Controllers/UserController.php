<?php
	namespace App\Http\Controllers;

	class UserController extends Controller
	{
         public function show($surname, $name)
		{
			return "user show $surname $name";
		}
	}
