<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // eloquent orm (rekomendasi)
        // query builder
        // row query
        // $student = Student::all(); //select * from student
        // return view('student', ['studentList'=> $student]);

        // query builder 
        // get/ mendapatkan data
        // $student = DB::table('students')->get();

        // push/ bikin data
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '0201001',
        //     'class_id' => 1
        // ]);

        // update data
        // DB::table('students')->where('id', 30)->update([
        //     'name' => 'query builder 2',
        //     'class_id' => 3            
        // ]); 
        // DB::table('students')->where('id', 30)->delete();

        
        // ==============================
        // eloquent
        // get data
        // $student = Student::all();
        // dd($student);

        // push/ bikin data
        // Student::create([
        //     'name' => 'eloquent',
        //     'gender' => 'P',
        //     'nis' => '0201033',
        //     'class_id' => 2
        // ]);

        // update data
        // Student::find(27)->update([
        //     'name' => 'eloquent 2',
        //     'class_id' => 1
        // ]);

        // Student::find(27)->delete();
        
        $nilai = [9,8,7,6,5,4,3,2,1,3,5,7,8,9];
        
        // php biasa
        // 1. hitung jumlah nilai
        // 2. hitung berapa banyak nilai
        // 3. hitung nilai rata-rata = total nilai / count nilai

        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRata = $totalNilai / $countNilai;
        // dd($nilaiRata);


        // collection
        // 1. hitung rata-rata nilai

        $nilaiRata2 = collect($nilai)->avg();
        dd($nilaiRata2); 

    }
}
