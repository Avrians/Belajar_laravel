<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $nama = "budi";
        return view('student', ['nama'=> $nama]);
    }
}
