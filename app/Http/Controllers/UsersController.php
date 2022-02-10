<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UsersController extends Controller
{
    public function users(){

        $student = Student::all();

        return view('pages.users.users')->with('users', $student);
    }
}
