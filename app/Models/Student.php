<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','gender', 'nis', 'class_id'
    ];

    // ini diperlukan jika nama table tidak plural dan tidak sama.
    // Jika nama model sama dan singular maka tidak wajib menggunakan kode dibawah ini
    // protected $table = 'students'; 

    // kode dibawah ini dipake jika nama primary key didalam table bukan "id", jika sudah id maka tidak perlu
    //protected $primaryKey = 'flight_id'; 
}
