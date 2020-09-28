@extends('layouts.main-layout')


@section('content')
  <div class="link">
    <a class="a2roomCreate" href="{{route('home')}}">To HomePage!</a>
  </div>
<form class="" action="{{route('room-store')}}" method="post">
  @csrf
  @method('POST')
  <div class="form_cont">
    <div class="form">
      <label for="room_number">N° stanza</label>
      <input type="text" name="room_number">
    </div>
    <div class="form">
      <label for="floor">Piano</label>
      <input type="text" name="floor">
    </div>
    <div class="form">
      <label for="beds">N° Letti</label>
      <input type="text" name="beds">
    </div>
    <button type="submit" id="btn" name="button">Inserisci</button>
  </div>
</form>

@endsection
