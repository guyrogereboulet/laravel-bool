@extends('layouts.layout')
@section("main")
  <div class="students">
    @foreach (config("students.students") as $student)
      <div class="student">
        <div class="info">
          <img src="{{$student["img"]}}" alt="{{$student["nome"]}}">
           <h2>
             {{$student["nome"]}} ({{$student["eta"]}} anni)
           </h2>
           <h3>Assunt{{($student["genere"]== 'm') ? 'o' : 'a'}} da {{$student["azienda"]}} come {{$student["ruolo"]}}</h3>
        </div>
         <p class="description">{{$student["descrizione"]}}</p>
      </div>
    @endforeach
  </div>
@endsection
