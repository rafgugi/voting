@extends('layouts.general')

@section('title','Hasil Vote')

@section('content')
  <div class="h3">{{ $question->question }}</div>
  @if($question->options)
    @foreach($question->options as $option)
      <p>{{ $option->option }} -> {{ $option->count }}</p>
    @endforeach
  @endif
  <a href="{{ route('showQuestion') }}"><< Kembali</a>
@endsection
