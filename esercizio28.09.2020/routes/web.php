<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagamentoController@index') -> name('pagamento.index');
Route::get('/pagamento/destroy/{id}', 'PagamentoController@destroy') -> name('pagamento.destroy');
Route::get('/pagamento/edit/{id}', 'PagamentoController@edit') -> name('pagamento.edit');
Route::get('/pagamento/update/{id}', 'PagamentoController@update') -> name('pagamento.update');
