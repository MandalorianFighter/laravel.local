<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{

public function show()
{
        DB::table('users')
		->increment('salary', 500);
	$users = User::all();

        return view('user.show', ['users' => $users]);
}

}
