<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // eloquent orm (rekomendasi)
        // query builder
        // row query
        $student = Student::all(); //select * from student
        return view('student', ['studentList'=> $student]);
    }
}
