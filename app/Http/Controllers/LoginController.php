<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

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

        $teacher = Teacher::where('email', $request->email)->where('password', $request->password)->first();

        if ($teacher) {
            $request->session()->put('user', $teacher->name);
            return redirect()->route('teachers');
        }
        return back();
    }

    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
