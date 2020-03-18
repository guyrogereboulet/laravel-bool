@extends('layouts.layout')

@section('main')
  <div class="students">
      <div class="student">
        <div class="info">
          <img src="{{$student["img"]}}" alt="{{$student["nome"]}}">
          <div class="text">
              <h2>
                {{$student["nome"]}} ({{$student["eta"]}} anni)
              </h2>
            <h3>Assunt{{($student["genere"]== 'm') ? 'o' : 'a'}} da {{$student["azienda"]}} come {{$student["ruolo"]}}</h3>
          </div>
        </div>
         <p class="description">{{$student["descrizione"]}}</p>
      </div>
  </div>

@endsection
