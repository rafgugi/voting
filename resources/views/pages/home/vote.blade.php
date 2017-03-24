@extends('layouts.general')

@section('title','Vote Pertanyaan')

@section('content')
  <div class="h3">{{ $question->question }}</div>
  @if($question->options)
    <form action="" method="POST">
      {{ csrf_field() }}
      @foreach($question->options as $option)
      <label>
        <input type="radio" name="vote" value="{{$option->id}}"> {{ $option->option }}
      </label>
      <br>
      @endforeach
      <input class="btn btn-default" type="submit">
    </form> 
  @endif
@endsection
