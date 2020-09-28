@extends('layouts.main-layout')


@section('content')
  <div class="link">
    <a class="a2roomCreate" href="{{route('room-create')}}">CREA STANZA!</a>
  </div>
  <table>
    <tr>
      <th>Room N°</th>
    </tr>
    {{-- per verificare subito l'output usare:
    {{json_encode($stanze)}} --}}
  @foreach ($stanze as $stanza)
    <tr>
      <td><a href="{{route('room-show', $stanza -> id)}}"> {{$stanza -> room_number }}</td></a>
    </tr>
  @endforeach
</table>

<?php
class MyClass {
  const CONST_VALUE = 'A constant value';
}

echo MyClass::CONST_VALUE;
?>
@endsection
