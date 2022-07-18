<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
//use App\Models\Post;

class CategoryController extends Controller
{
    public function index()
        {
                $categories = Category::all();
                return view('category.index', ['categories' => $categories]);
        }


    public function show($id)
        {
                //$category = Category::with('post')->where('id', $id)->first();
                $category = Category::findOrFail($id);
                return view('category.show', ['category' => $category]);
        }
}
