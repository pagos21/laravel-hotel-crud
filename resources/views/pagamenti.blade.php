@extends('layouts.main-layout')


@section('content')
  <div class="link">
    <a class="a2roomCreate" href="{{route('home')}}">Back</a>
  </div>
  <table class="payTable">
    <tr>
      <th colspan="6">PAYMENTS LIST</th>
    </tr>
    <tr>
      <th>STATO</th>
      <th>PREZZO</th>
      <th>Id Prenoatazione</th>
      <th>Id Pagante</th>
      <th colspan="2">Delete/Edit</th>


    </tr>
    {{-- per verificare subito l'output usare:
    {{json_encode($stanze)}} --}}
    @foreach ($pagamenti as $pagamento)
    <tr>
      <td>{{$pagamento -> status}} </td>
      <td>{{$pagamento -> price}}€</td>
      <td> {{$pagamento -> prenotazione_id}}</td>
      <td> {{$pagamento -> pagante_id}}</td>

      <td><a href="{{route('payment-destr', $pagamento -> id)}}"> DELETE!</a></td>
      <td><a href="{{route('payment-edit', $pagamento -> id)}}"> Edit!</a> </td>

    </tr>
  @endforeach
</table>
@endsection
