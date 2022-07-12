<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthUser;

class AuthUserController extends Controller
{
    public function show()
        {
                $authUsers = AuthUser::all();
                return view('auth-user.show', ['authUsers' => $authUsers]);
        }
}
