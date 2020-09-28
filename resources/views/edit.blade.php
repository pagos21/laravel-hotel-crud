
@extends('layouts.main-layout')

@section('content')

  <form class="" action="{{route('payment-update', $pagamento -> id)}}" method="post">
    @csrf
    @method('POST')
    <div class="form_cont">
      <div class="form">
        <label for="status">Status</label>
        <select name="status">
          <option value="accepted">ACCEPTED</option>
          <option value="rejected">REJECTED</option>
          <option value="pending">PENDING</option>

        </select>
      </div>
      <div class="form">
        <label for="price">Price</label>
        <input type="number" name="price">
      </div>

      <button type="submit" id="btn" name="button">Edit!</button>
    </div>
  </form>

@endsection
