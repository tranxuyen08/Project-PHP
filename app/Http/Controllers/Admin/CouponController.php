<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCouponsRequest;
use App\Http\Requests\Admin\UpdateCouponRequest;
use Illuminate\Http\Request;
use App\Models\Coupons;

class CouponController extends Controller
{
    public function index() {
        $total = Coupons::count();
        $page = request()->get('page', 1);
        $limit = 10;
        $totalPage = ceil($total / $limit);
        $offset = ($page - 1 ) * $limit;
        $coupons = Coupons::select()->limit($limit)->offset($offset)->get();
        return view('admin.coupons.index', [
            'coupons' => $coupons,
            'total' => $total,
            'page' => $page,
            'totalPage' => $totalPage,
            'offset' => $offset,
        ]);
    }

    public function create() {
        return view('admin.coupons.create');
    }

    public function store(CreateCouponsRequest $request) {
        $code = $request->get('code');

        Coupons::create([
            'code' => $code,
        ]);

        return redirect(route('admin.coupons.index'));
    }

    public function show($id) {
        $coupons = Coupons::find($id);
        return view('admin.coupons.show', [
            'coupons' => $coupons,
        ]);
    }

    public function edit($id) {
        $coupon = Coupons::find($id);
        return view('admin.coupons.edit', [
            'coupon' => $coupon,
        ]);
    }

    public function update(UpdateCouponRequest $request, $id) {
        $code = $request->get('code');
        Coupons::find($id)
        ->update([
            'code' => $code,
        ]);
        return redirect(route('admin.coupons.index'));
    }

    public function destroy($id)
    {

        $coupons = Coupons::findOrFail($id);
        $coupons->delete();
        return redirect(route('admin.coupons.index'));
    }}
