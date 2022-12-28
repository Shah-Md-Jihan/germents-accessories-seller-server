<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();

            $category = new Category;
            $category->category_name = $data['category_name'];

            $category->save();
            return response()->json(['status' => true, 'message' => 'Category created successfully!'], 201);
        }
    }
    public function allCategories()
    {
        return Category::all();
    }
}
