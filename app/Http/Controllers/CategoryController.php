<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
//use App\Models\Post;

class CategoryController extends Controller
{
    public function show($id)
        {
                $category = Category::with(['posts'])->where('id',$id)->first();
                return view('category.show', ['category' => $category]);
        }
}
