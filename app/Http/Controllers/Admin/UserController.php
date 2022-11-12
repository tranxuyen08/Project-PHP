<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;
use Illuminate\Http\Request;
use PharIo\Manifest\License;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $total = User::count();
        $page = request()->get('page', 1);
        $limit = 10;
        $totalPage = ceil($total / $limit);
        $offset = ($page - 1) * $limit;
        $users = User::select()->limit($limit)->offset($offset)->get();
        return view('admin.users.index', [
            'total' => $total,
            'totalPage' => $totalPage,
            'offset' => $offset,
            'users' => $users,
        ]);
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(CreateUsersRequest $request) {
        $email = $request->get('email');
        $password = $request->get('password');

        User::create([
            'email' => $email,
            'password' => $password,
        ]);
        return redirect(route('admin.users.index'));
    }

    public function show($id) {
        $users = User::find($id);
        return view('admin.users.show', [
            'users' => $users,
        ]);
    }

    public function edit($id) {
        $users = User::find($id);
        return view('admin.users.edit', [
            'users' => $users,
        ]);
    }
    public function update(UpdateUsersRequest $request, $id) {
        $email = $request->get('email');
        $password = $request->get('password');
        User::find($id)
        ->update([
            'email' => $email,
            'password' => $password,
        ]);
        return redirect(route('admin.users.index'));
    }

    public function delete($id) {
        $users = User::find($id);
        $users->delete();

        return redirect(route('admin.users.index'));
    }
}
