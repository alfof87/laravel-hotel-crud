@extends('layouts.main-layout');
@section('section')
  <div class="">
    <h1>Pagamenti</h1>
    <br>
    <ul>
      @foreach ($pagamenti as $pagamento)
        <li>
          {{$pagamento -> status}}
          {{$pagamento -> price}}
          <a href="{{ route('pagamento.destroy', $pagamento -> id)}}">X</a>
          <a href="{{ route('pagamento.edit', $pagamento -> id)}}">E</a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
