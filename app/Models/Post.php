<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Thumbnail;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function thumbnail()
      {
          return $this->hasOne(Thumbnail::class);
      }
}
