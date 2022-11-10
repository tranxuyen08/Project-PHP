<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CouponController as AdminCouponsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ProductOrderController;
use App\Http\Controllers\Admin\ProductOrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');

    //categories
    Route::get('/categories', [AdminCategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories/store', [AdminCategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/create', [AdminCategoryController::class, 'create'])->name('categories.create');
    Route::get('/categories/{id}/edit', [AdminCategoryController::class, 'edit'])->name('categories.edit');
    Route::get('/categories/{id}/show', [AdminCategoryController::class, 'show'])->name('categories.show');
    Route::delete('/categories/{id}/delete', [AdminCategoryController::class, 'destroy'])->name('categories.delete');
    Route::put('/categories/{id}/update', [AdminCategoryController::class, 'update'])->name('categories.update');

    //coupons
    Route::get('/coupons', [AdminCouponsController::class, 'index'])->name('coupons.index');
    Route::get('/coupons/create', [AdminCouponsController::class, 'create'])->name('coupons.create');
    Route::post('/coupons/store', [AdminCouponsController::class, 'store'])->name('coupons.store');
    Route::get('/coupons/{id}/edit', [AdminCouponsController::class, 'edit'])->name('coupons.edit');
    Route::get('/coupons/{id}/show', [AdminCouponsController::class, 'show'])->name('coupons.show');
    Route::delete('/coupons/{id}/delete', [AdminCouponsController::class, 'destroy'])->name('coupons.delete');
    Route::put('/coupons/{id}/update', [AdminCouponsController::class, 'update'])->name('coupons.update');

    //products
    Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}/update', [AdminProductController::class, 'update'])->name('products.update');
    Route::get('/products/{id}/show', [AdminProductController::class, 'show'])->name('products.show');
    Route::delete('/products/{id}/delete', [AdminProductController::class, 'destroy'])->name('products.delete');

    //order
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::get('/orders/{id}/show', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/{id}/update', [OrderController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{id}/delete', [OrderController::class, 'destroy'])->name('orders.delete');

    //product orders
    Route::get('/product-orders', [ProductOrderController::class, 'index'])->name('product_orders.index');
    Route::post('/product-orders/store', [ProductOrderController::class, 'store'])->name('product_orders.store');
    Route::get('/product-orders/create', [ProductOrderController::class, 'create'])->name('product_orders.create');
    Route::get('/product-orders/{id}/show', [ProductOrderController::class, 'show'])->name('product_orders.show');
    Route::get('/product-orders/{id}/edit', [ProductOrderController::class, 'edit'])->name('product_orders.edit');
    Route::put('/product-orders/{id}/update', [ProductOrderController::class, 'update'])->name('product_orders.update');
    Route::delete('/product-orders/{id}/delete', [ProductOrderController::class, 'destroy'])->name('productorders.delete');

    //user
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [AdminUserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/show', [AdminUserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}/update', [AdminUserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}/delete', [AdminUserController::class, 'delete'])->name('users.delete');

});

Route::get('/', function () {
    return view('welcome');
});



