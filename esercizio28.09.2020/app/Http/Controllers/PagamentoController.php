<?php

namespace App\Http\Controllers;
use App\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index(){
      $pagamenti = Pagamento::all();
      return view('layouts.pagamento-index', compact('pagamenti'));
    }
    public function destroy($id){
      $pagamento = Pagamento::findOrFail($id);
      $pagamento -> delete();
      return redirect() -> route('pagamento.index');
    }
    public function edit($id){
      $pagamento = Pagamento::findOrFail($id);
      return view('layouts.pagamento-edit', compact('pagamento'));
    }
    public function update($id){
      $pagamento = Pagamento::findOrFail($id);
      $pagamento -> update($data);
      return view('pagamento.update', compact('pagamento.index'));
    }
}
