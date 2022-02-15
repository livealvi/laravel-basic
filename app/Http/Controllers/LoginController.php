<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('pages.form.login');
    }

    // login validation
    public function loginValidator(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required|regex:/\S+@\S+\.\S+/',
                'password' => 'required'
            ],
            [
                'email.required' => 'Please enter valid email',
            ]
        );
        return view('home');
    }
}
