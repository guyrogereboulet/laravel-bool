@extends('layouts.layout')
@section("main")
  @foreach (config("students.students") as $student)
      {{$student["nome"]}}
  @endforeach
@endsection
