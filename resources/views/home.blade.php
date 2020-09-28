@extends('layouts.main-layout')

@section('content')
  <div class="home">
    <a href="{{route('rooms')}}"> ROOMS</a>
    <a href="{{route('payments')}}"> PAYMENTS</a>

  </div>
@endsection
