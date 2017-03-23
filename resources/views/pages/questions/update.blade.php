@extends('layouts.general')

@section('title','Tambah Pertanyaan')

@section('content')
  <div class="h3">Ubah Pertanyaan</div>
  <form action="" method="POST">
    {{ csrf_field() }}
    <input class="form-control" type="text" name="question" required="" value="{{$question->question}}">     
    <br>
    <input class="btn btn-default" type="submit">
  </form>
@endsection
