@extends('layouts.main-layout');
@section('section')
  <h1>PAGAMENTO EDIT</h1>
  <form class="" action="{{route('pagamento.update', $pagamento -> id)}}" method="post">
    @csrf
    @method('POST')
    <div class="">
      <label for="status">STATUS</label>
      <input type="text" name="status" value="{{ $pagamento -> status }}">
    </div>
    <div class="">
      <label for="price">PRICE</label>
      <input type="number" name="price" value="{{ $pagamento -> price }}">
    </div>

    <button type="submit" name="button">UPDATE</button>
  </form>
@endsection
