<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AuthProfile;

class AuthUser extends Model
{
    use HasFactory;

    public function authprofile()
	{
		return $this->hasOne(AuthProfile::class);
	}
}
