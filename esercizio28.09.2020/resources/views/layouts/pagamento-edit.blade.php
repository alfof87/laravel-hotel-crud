@extends('layouts.main-layout');
@section('section')
  <h1>PAGAMENTO EDIT</h1>
  <br>
  <form class="" action="{{route('pagamento.update', $pagamento -> id)}}" method="post">
    @csrf
    @method('POST')
    <div class="input">
      <label for="status">STATUS</label>
      <input type="text" name="status" value="{{ $pagamento -> status }}">
    </div>
    <br>
    <div class="input">
      <label for="price">PRICE</label>
      <input type="number" name="price" value="{{ $pagamento -> price }}">
    </div>
    <br>
  </form>
  <button type="submit" name="button">UPDATE</button>
@endsection
