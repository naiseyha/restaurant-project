<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('Fronend.categories.index',compact('categories'));
    }

    public function show(Category $category)
    {
        return view('Fronend.categories.show', compact('category'));
    }
        

}
