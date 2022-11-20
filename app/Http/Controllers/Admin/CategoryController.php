<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $total = Category::count();
        $page = request()->get('page', 1);
        $limit = 10;
        $totalPage = ceil($total / $limit);
        $offset = ($page - 1) * $limit;
        $categories = Category::select()->limit($limit)->offset($offset)->get();
        return view('admin.categories.index', [
            'total' => $total,
            'page' => $page,
            'totalPage' => $totalPage,
            'offset' => $offset,
            'categories' => $categories,
        ]);
    }

    public function create() {
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request) {
        $name = $request->get('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomize = rand(111111, 999999);
            $extension = $file->getClientOriginalExtension();
            $filename = $randomize . '.' . $extension;
            $file->move(public_path('images'), $filename);

        }
        Category::create([
            'name' => $name,
            'image' => $filename,
        ]);
        // Category::update([
        //     'name' => $name,
        //     'image' => $filename,
        // ]);

        return redirect(route('admin.categories.index'));
    }

    public function show($id) {
        $category = Category::find($id);
        return view('admin.categories.show',[
            'category' => $category
        ]);
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.categories.edit',[
            'category' => $category
        ]);
    }

    public function update(UpdateCategoryRequest $request, $id) {

        $name = $request->get('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomize = rand(111111, 999999);
            $extension = $file->getClientOriginalExtension();
            $filename = $randomize . '.' . $extension;
            $file->move(public_path('images'), $filename);

        }
        Category::find($id)
        ->update([
            'name' => $name,
            'image' => $filename,
        ]);

        return redirect(route('admin.categories.index'));
    }

    public function destroy($id) {
        $categories = Category::find($id);
        $categories->delete();

        return redirect(route('admin.categories.index'));
    }

}
