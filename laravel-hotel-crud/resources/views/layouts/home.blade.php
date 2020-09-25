@extends("layouts.main-layout")

@section("content")
  <ul>
    {{-- {{ json_encode($stanze) }} --}}
    @foreach ($stanze as $item)
      <li>
        {{$item -> room_number}}
      </li>
    @endforeach
  </ul>
@endsection
