<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductsRequest;
use App\Http\Requests\Admin\UpdateCouponRequest;
use App\Http\Requests\Admin\UpdateProductsRequest;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $total = Products::count();
        $page = request()->get('page', 1);
        $limit = 10;
        $totalPage = ceil($total / $limit);
        $offset = ($page - 1) * $limit;
        $products = Products::with(['category'])->select()->limit($limit)->offset($offset)->get(); // 1 select * from products limit x offset x;
        return view('admin.products.index', [
            'total' => $total,
            'limit' => $limit,
            'totalPage' => $totalPage,
            'products' => $products,
        ]);
    }

    public function create() {
        $categories = Category::all();
        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(CreateProductsRequest $request) {
        $name = $request->get('name');
        $category_id = $request->get('category_id');
        $amount = $request->get('amount');

        Products::create([
            'name' => $name,
            'category_id' => $category_id,
            'amount' => $amount,
        ]);
        return redirect(route('admin.products.index'));
    }

    public function edit($id) {
        $product = Products::find($id);
        $categories = Category::all();
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(UpdateProductsRequest $request,$id) {
        $name = $request->get('name');
        $amount = $request->get('amount');
        $category_id = $request->get('category_id');

        Products::find($id)
        ->update([
            'name' => $name,
            'amount' => $amount,
            'category_id' => $category_id,
        ]);
        return redirect(route('admin.products.index'));
    }
    public function show($id) {
        $products = Products::find($id);
        return view('admin.products.show', [
            'products' => $products,
        ]);
    }

    public function destroy($id) {
        $product = Products::find($id);
        $product->delete();
        return redirect(route('admin.products.index'));
    }
}
