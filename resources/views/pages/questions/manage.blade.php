@extends('layouts.general')

@section('title','Manage Pertanyaan')

@section('content')
  <div class="h3">Manage Pertanyaan</div>
  <a href="{{ route('showAddQuestion') }}" class="btn btn-default">Tambah Pertanyaan</a>
  <a href="{{ route('showAddOption') }}" class="btn btn-default">Tambah Opsi</a>
  <br>
  <br>
  @foreach($questions as $question)
    <li>
      {{ $question->question }}
      - <a href="{{ route('showUpdateQuestion', ['id' => $question->id]) }}"> Update </a>
      - <a href="{{ route('deleteQuestion', ['id' => $question->id]) }}"> Delete </a>
    </li>
  @endforeach
@endsection
