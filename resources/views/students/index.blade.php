@extends('layouts.layout')
@section("main")
  @foreach (config("students.students") as $student)
    <img src="{{$student["img"]}}" alt="{{$student["nome"]}}">
     <h2>
       {{$student["nome"]}} ({{$student["eta"]}} anni)
     </h2>
     <h3>Assunt{{($student["genere"]== 'm') ? 'o' : 'a'}} da {{$student["azienda"]}} come {{$student["ruolo"]}}</h3>

  @endforeach
@endsection
