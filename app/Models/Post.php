<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Thumbnail;
use App\Models\Category;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $with = ['comments'];
    protected $fillable = ['title', 'slug'];

    public function thumbnail()
      {
          return $this->hasOne(Thumbnail::class);
      }

//    public function category()
//      {
//	  return $this->belongsTo(Category::class);
//      }

    public function categories()
      {
	return $this->belongsToMany(Category::class);
      }

    public function comments()
      {
        return $this->hasMany(Comment::class);
      }
}
