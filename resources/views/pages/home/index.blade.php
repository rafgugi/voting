@extends('layouts.general')

@section('title','List Pertanyaan')

@section('content')
  <div class="h3">List Pertanyaan</div>
  @if (Auth::user() == null)
    Anda belom login
  @else
    Selamat datang {{Auth::user()->name}}
  @endif
  @role('student')
    <div class="h3">Hanya bisa diakses oleh student</div>
  @endrole

  @foreach($questions as $question)
    <a href="{{ route('showDetailQuestion', ['id' => $question->id]) }}"><li>{{ $question->question }}</li></a>
  @endforeach
@endsection
