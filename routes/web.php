<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CouponController as AdminCouponsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
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
});

Route::get('/', function () {
    return view('welcome');
});



