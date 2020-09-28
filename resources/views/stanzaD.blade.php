@extends('layouts.main-layout')


@section('content')
  <div class="link">
    <a class="a2roomCreate" href="{{route('home')}}">To HomePage!</a>
  </div>

<h1>Room: {{$stanzaDesc -> room_number}}</h1>
<h2>Situata al piano:  {{$stanzaDesc -> floor}}</h2>
<h2> N° Letti: {{$stanzaDesc -> beds}}</h2>

@endsection
