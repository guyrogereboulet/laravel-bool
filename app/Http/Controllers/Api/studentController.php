<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function __construct()
    {
     //Prendo l'array con il metodo config
     $this->students = config("students.students");
    }

    public function all()
    {
     //Salvo l'array in una variabile $students
     $students = $this->students;
     //Creo un array vuoto
     $studentAge = [];
     //faccio un ciclo per filtrare nome e eta
     foreach ($students as $student) {
        $studentAge[$student['nome']] = $student['eta'];
     }

     return response()->json($studentAge);
    }

}
