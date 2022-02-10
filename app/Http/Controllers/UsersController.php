<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UsersController extends Controller
{
    public function users(){

        $students = Student::all();

        return view('pages.users.users')->with('users', $students);
    }
}
