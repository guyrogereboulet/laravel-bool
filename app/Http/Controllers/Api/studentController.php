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
     //Ritorno un Json con tutti i dati
     return response()->json($students);
    }


    public function getAge()
    {
     //Salvo l'array in una variabile $students
     $students = $this->students;
     //Creo un array vuoto
     $studentAge = [];
     //faccio un ciclo per filtrare nome e eta
     foreach ($students as $student) {
       //faccio un push del valore nome e eta nell'array vuoto
        $studentAge[$student['nome']] = $student['eta'];
     }
     //Ritorno un Json con i dati filtrati
     return response()->json($studentAge);
    }


    //L'argomento in questa funzione corrisponde alla variabile della route delle API
    public function getForAge($eta)
    {
     //Salvo l'array in una variabile $students
     $students = $this->students;
     //Creo un array vuoto
     $studentFiltered = [];
     //faccio un ciclo per filtrare il nome
     foreach ($students as $student) {
       if($student['eta'] == $eta) {
         //faccio un push del valore eta nell'array vuoto se si verifica la condizione
         $studentFiltered[]= $student;
       }
     }
     //Ritorno un Json con i dati filtrati
     return response()->json($studentFiltered);
    }


    // //Con Request chiedo all'utente di inserire un Data come quello di AJAX
    // public function filter(Request $request)
    // {
    //  //Salvo l'array in una variabile $students
    //  $students = $this->students;
    //  $data = $request->all();
    //  $eta = $data['eta'];
    //  //Creo un array vuoto
    //  $studentFiltered = [];
    //
    //  foreach ($students as $student) {
    //    if($student['eta'] == $eta) {
    //      $studentFiltered[]= $student;
    //    }
    //  }
    //
    //  //Ritorno un Json con i dati filtrati
    //  return response()->json($studentFiltered);
    // }

    //L'oggetto Request va a trattare tutti quesi dati che passono in maniera nascosta come AJAX
    public function filter(Request $request)
    {
      //Salvo l'array in una variabile $students
      $students = $this->students;
      //Creaiamo una variabile che contiene i tipi ammessi di coppia chiave->valore
      $typeRequest = [
       'eta',
       'nome',
       'genere'
      ];
      //La variabile data ci permette di reperire i dati del nostro array
      $data = $request->all();

      //Ad ogni giro avremo la coppia chiave->valore
      foreach ($data as $key => $value) {
        //Se la chiave non esiste nell'array $typeRequest
        if(!in_array($key,$typeRequest)) {
          //Elimino la key dal nostro data
          unset($data[$key]);
        }
      }

      //Da questo punto in poi i nostri data sono filtrati dai tipi ammessi

      foreach ($data as $key => $value) {
        //se siamo al primo giro uso l'array students
        if(array_key_first($data) == $key) {
          //Chiamo la funzione filterFor
          $studentFiltered = $this->filterFor($key, $value, $students);
        }
        //In tutti gli altri casi uso studentFiltered
        else {
          $studentFiltered = $this->filterFor($key, $value, $studentFiltered);
        }
      }

      return response()->json($studentFiltered);
    }
    //Creo un funzione che mi permette di filtrare per un determinato tipo, valore e array
    private function filterFor($type, $value, $array)
    {
      $filtered = [];
      foreach ($array as $element) {
         if($element[$type] == $value) {
           $filtered[]= $element;
         }
       }
       return $filtered;
    }





}
