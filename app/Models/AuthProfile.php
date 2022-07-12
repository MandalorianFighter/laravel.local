<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AuthUser;

class AuthProfile extends Model
{
    use HasFactory;

    public function authuser()
	{
		return $this->belongsTo(AuthUser::class);
	}
}
