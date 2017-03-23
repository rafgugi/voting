@extends('layouts.general')

@section('title','List Pertanyaan')

@section('content')
  <div class="h3">List Pertanyaan</div>
  @foreach($questions as $question)
    <a href="{{ route('showDetailQuestion', ['id' => $question->id]) }}"><li>{{ $question->question }}</li></a>
  @endforeach
@endsection
