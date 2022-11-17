<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        return view('home.register.index');
    }

    public function storeLogin(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $credentials = [
            'email' => $email,
            'password' => $password,
            'role' => User::ROLE_USER,
        ];

        if (Auth::attempt($credentials)) {
            // select * from users where email = $email and passowrd = bcryp($password)
            // and role = $role
            $request->session()->regenerate();
            return redirect(route('home.index'));
        }
        return redirect(route('login.index'));
    }

    public function logout() {
        Auth::logout();
        return redirect(route('login.index'));
    }
}
