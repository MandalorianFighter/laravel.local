<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{

public function index()
{
	$users = User::paginate();

        return view('user.index', ['users' => $users]);
}

public function show($id)
{
        $user = User::findOrFail($id);

        return view('user.show', ['user' => $user]);
}

}
