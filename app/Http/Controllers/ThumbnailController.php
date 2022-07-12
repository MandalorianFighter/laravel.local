<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thumbnail;

class ThumbnailController extends Controller
{
    public function show()
	{
		$thumbnails = Thumbnail::all();
                return view('thumbnail.show', ['thumbnails' => $thumbnails]);
	}
}
