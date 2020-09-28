<?php

namespace App\Http\Controllers;
use App\Stanza;
use Illuminate\Http\Request;

class StanzeController extends Controller
{
    public function index(){
      $stanze = Stanza::all();
      return view('stanza.index', compact('stanze'));
    }
    public function show($id){
      $stanza = Stanza::FindOrFail($id);
      return view('stanza.show', compact('stanza'));
    }
    // public function create(){
    //   return view('stanza.index')
    // }
    public function store(Request $request){
      $data = $request -> all();
      $stanza = Stanza::create($data);
      return redirect() -> route('stanze-index');
      // $stanza = new Stanza();
      // $stanza -> room_number = $request -> room_number;
      // $stanza -> floor = $request -> floor;
      // $stanza -> beds = $request -> beds;

    }
}
