<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductOrdersRequest;
use App\Models\ProductOrders;
use CreateProductOrdersTable;
use Illuminate\Http\Request;

class ProductOrderController extends Controller
{
    public function index() {
      $total = ProductOrders::count();
      $limit = 10;
      $page = request()->get('page', 1);
      $totalPage = ceil($total / $limit);
      $offset = ($page - 1) * $limit;
      $productOders = ProductOrders::select()->limit($limit)->offset($offset)->get();

      return view('admin.product_orders.index', [
        'total' => $total,
        'limit' => $limit,
        'totalPage' => $totalPage,
        'productOders' => $productOders,
      ]);
    }

    public function create() {
      return view('admin.product_orders.create');
    }

    public function store(CreateProductOrdersRequest $request) {
      $order_id = request()->get('order_id');
      $product_id = request()->get('product_id');

      ProductOrders::create([
        'order_id' => $order_id,
        'product_id' => $product_id,
      ]);
      return redirect(route('admin.product_orders.index'));
    }

    public function show($id) {
      $productOders = ProductOrders::find($id);
      return view('admin.product_orders.show', [
          'product_orders' => $productOders,
      ]);
    }

}
