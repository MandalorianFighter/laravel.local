<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
        public function userCity($name)
                {
                        $users = [
		             'user1' => 'city1',
		             'user2' => 'city2',
		             'user3' => 'city3',
		             'user4' => 'city4',
		             'user5' => 'city5',
	                ];

                        if(!array_key_exists($name, $users)) {
                              return 'There is no such user, try again';
                        }
                        return view('user.show', ['title'=>$name, 'text'=>$users[$name]]);
                }


         public function show($surname, $name)
		{
			return view('user.show', ['title'=>$surname, 'text'=>$name]);
		}
	}
