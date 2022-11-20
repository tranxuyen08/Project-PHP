<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::with(['products', 'products.photo'])->find($id);
        return view('home.categories.show', [
            'category' => $category,
        ]);
    }
}
