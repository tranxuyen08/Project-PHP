<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Categories;
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

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/category', [CategoryController::class, 'category'])->name('category.category');
Route::get('/product', [ProductController::class, 'product'])->name('products.products');


Route::get('/', function () {
    return view('welcome');
});
