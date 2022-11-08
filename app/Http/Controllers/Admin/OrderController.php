<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOrdersRequest;
use App\Http\Requests\Admin\UpdateOrdersRequest;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $total = Orders::count();
        $page = request()->get('page', 1);
        $limit = 10;
        $totalPage = ceil($total / $limit);
        $offset = ($page - 1) * $limit;
        $orders = Orders::select()->limit($limit)->offset($offset)->get();

        return view('admin.orders.index', [
            'total' => $total,
            'page' => $page,
            'totalPage' => $totalPage,
            'offset' => $offset,
            'orders' => $orders,
        ]);
    }

    public function create() {
        return view('admin.orders.create');
    }

    public function store(CreateOrdersRequest $request) {
        $user_id = $request->get('user_id');
        $amount = $request->get('amount');
        $status = $request->get('status');
        $coupon_id = $request->get('coupon_id');

        Orders::create([
            'user_id' => $user_id,
            'status' => $status,
            'coupon_id' => $coupon_id,
            'amount' => $amount,
        ]);
        return redirect(route('admin.orders.index'));
    }

    public function show($id) {
        $order = Orders::find($id);
        return redirect(route('admin,orders.show'),[
            'order' => $order
        ]);
    }

    public function edit($id) {
        $order = Orders::find($id);
        return view('admin.orders.edit', [
            'order' => $order,
        ]);
    }

    public function update(UpdateOrdersRequest $request, $id) {
        $user_id = $request->get('user_id');
        $amount = $request->get('amount');
        $status = $request->get('status');
        $coupon_id = $request->get('coupon_id');
        Orders::find($id)
        ->update([
            'user_id' => $user_id,
            'amount' => $amount,
            'status' => $status,
            'coupon_id' => $coupon_id,
        ]);

        return redirect(route('admin.orders.index'));
    }

    public function destroy($id) {
        $order = Orders::find($id);
        $order->delete();
        return redirect(route('admin.orders.index'));
    }
}
