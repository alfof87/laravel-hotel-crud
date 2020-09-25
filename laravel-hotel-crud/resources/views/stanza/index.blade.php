@extends("layouts.main-layout")

@section("content")
  <ul>
    {{-- {{ json_encode($stanze) }} --}}
    <form action="{{route('stanza-create')}}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="room_number">Room Number</label>
        <input type="text" name="Room Number" value="">
      </div>
      <div class="form-group">
        <label for="floor">Floor</label>
        <input type="text" name="Floor" value="">
      </div>
      <div class="form-group">
        <label for="beds">Beds</label>
        <input type="text" name="Beds" value="">
      </div>
      <button type="submit" name="button">Crea</button>
    </form>
    @foreach ($stanze as $item)
      <li><a href="{{route('stanza-show', $item -> id)}}">{{$item -> room_number}}</a></li>
    @endforeach
  </ul>
@endsection
