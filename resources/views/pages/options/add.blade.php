@extends('layouts.general')

@section('title','Tambah Pertanyaan')

@section('content')
  <div class="h3">Tambah Jawaban</div>
  <form action="" method="POST">
    {{ csrf_field() }}
    pertanyaan : 
    <select name="questions_id" class="form-control">
      @foreach($questions as $question)
      <option value="{{ $question->id }}"> {{ $question->question }} </option>
      @endforeach
    </select>
    <br>
    nama : <input class="form-control" type="text" name="option" required="">
    <br>
    <input class="btn btn-default" type="submit">
  </form>
@endsection
