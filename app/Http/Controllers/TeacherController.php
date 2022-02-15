<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Models\Course;

class TeacherController extends Controller
{
    public function teachers(){

        $teachers = Teacher::all();

        return view('pages.teachers.teachers')->with('teachers', $teachers);
    }

    public function teacherCourses(){
        $teacher = Teacher::where('id', 1)->first();
        return $teacher->assignedCourses();
    }
}
