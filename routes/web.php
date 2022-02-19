<?php


use App\Http\Controllers\FuncionesController;


Route::get('/', 'FuncionesController@index')->name('funciones.index');

Route::post('/store',
             'FuncionesController@store')->name('funciones.store');

Route::get('/create', 'FuncionesController@create')->name('funciones.create');

Route::delete('/funciones/{id}', 'FuncionesController@destroy') -> name('funciones.destroy');


