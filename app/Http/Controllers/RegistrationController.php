<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('pages.form.registration');
    }

    // registration validation
    public function userCreate(Request $request)
    {
        $validateUser = $request->validate(
            [
                'name' => 'required|min:5|max:10',
                'email' => 'required|regex:/\S+@\S+\.\S+/',
                'dob' => 'required',
                'phone' => 'required|regex:/^([0-9\(\)\/\+ \-]*)$/',
                'password' => 'required'
            ],
            [
                'name.required' => 'Please put your name',
                'name.min' => 'Name must be greater than 5 characters'
            ]
        );

        //$users[]= (object)$validateUser; - for old

        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->password = $request->password;
        $student->save();
        return view('pages.form.login')->with('users', $student);
    }

    public function users()
    {
        return view('pages.users.users');
    }
}
