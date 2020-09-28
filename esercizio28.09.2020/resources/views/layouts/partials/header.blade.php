<div class="">
  <ul>
    @foreach ($pagamenti as $pagamento)
      <li>
        {{$pagamento -> status}}
        {{$pagamento -> price}}
        <a href="{{ route('pagamento.destroy', $pagamento -> id)}}">X</a>
        <a href="{{ route('pagamento.edit', $pagamento -> status)}}">E</a>
      </li>
    @endforeach
  </ul>
</div>
