<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function __construct()
    {
     $this->students = config("students.students");
    }

    public function all()
    {
     $students = $this->students;
     return response()->json($students);
    }

}
