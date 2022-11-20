<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Products;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        // get list categories
        // get list products
        $categories = Category::select()->get();
        $products = Products::select()->get();
        $photo = Photo::select()->get();
        return view('home.index', [
            'categories' => $categories,
            'products' => $products,
            'photo' => $photo,
        ]);
    }
}
