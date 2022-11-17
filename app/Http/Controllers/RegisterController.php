<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegister;
use App\Models\User;


class RegisterController extends Controller
{
    public function create()
    {
        return view('home.register.create');
    }

    public function store(CreateRegister $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        User::create([
            'email' => $email,
            'password' => bcrypt($password),
            'role' => User::ROLE_USER,
        ]);
        $message = "Register success!!";
        

        return redirect(route('login.index'));
    }
}
