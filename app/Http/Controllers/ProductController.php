<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id) {
        $product = Products::with(['category', 'photos'])->find($id);
        return view('home.products.show', [
            'product' => $product,
        ]);
    }
}
