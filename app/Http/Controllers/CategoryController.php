<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::find($id);
        $products = $category->products()->get();
        return view('categories.show')->with(compact('category', 'products'));
    }
}
