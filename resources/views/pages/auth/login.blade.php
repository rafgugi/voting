@extends('layouts.general')

@section('title','Login')

@section('content')
  <div class="h3">Login</div>
  <form action="" method="POST">
    {{ csrf_field() }}
    @if (session('login') == 'fail')
    <p class="text-danger">email atau password salah</p>
    @endif
    email : <input class="form-control" type="email" name="email" required="">
    <br>
    password : <input class="form-control" type="password" name="password" required="">
    <br>
    <input class="btn btn-default" type="submit" value="login">
  </form>
@endsection
