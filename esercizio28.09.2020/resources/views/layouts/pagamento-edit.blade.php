@include('layouts.main-layout');

<form class="" action="{{route('pagamento.update', $pagamenti -> id)}}" method="post">
  @csrf
  @method('POST')
  <div class="">
    <label for="status">STATUS</label>
    <input type="text" name="status" value="{{ $pagamento -> status }}">
  </div>
  <div class="">
    <label for="price">PRICE</label>
    <input type="text" name="price" value="{{ $pagamento -> price }}">
  </div>

  <button type="submit" name="button">UPDATE</button>
</form>
