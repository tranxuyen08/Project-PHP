<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() {
        return view('admin.login.index');
    }

    public function store(LoginRequest $request) {
        $email = $request->get('email');
        $password = $request->get('password');
        $credentials = [
            'email' => $email,
            'password' => $password,
            'role' => User::ROLE_ADMIN,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('admin.index'));
        }
    }

    public function register() {
        return view('admin.login.register');
    }

    public function logout() {
        Auth::logout();
        return redirect(route('admin.login.index'));
    }
}
