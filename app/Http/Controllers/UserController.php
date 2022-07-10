<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

public function show()
{
	$users = DB::table('users')->get();

        return view('user.show', ['users' => $users]);
}

}
