<?php

use Illuminate\Support\Facades\Route;



//Auth::routes();
///Route::redirect('/', 'blog');
//Route::get('blog', 'Web\PageController@blog')->name('blog');

//Route::redirect('/', 'minas');
Auth::routes();
//Route::get('minas', 'MinaController@index')->name('index');
Route::redirect('/','login');



Route::get('/home', 'HomeController@index')->name('home');

/**Route::put('post/{id}', function ($id) {*/
//Minas


Route::post('minas/form', 'MinaController@store')->name('minas.store');
Route::get('minas', 'MinaController@index')->name('minas.index');
Route::get('minas/form', 'MinaController@create')->name('minas.create');

Route::put('minas/{mina}', 'MinaController@update')->name('minas.update');
Route::delete('minas/{idMina}', 'MinaController@destroy')->name('minas.destroy');
Route::get('minas/{idMina}', 'MinaController@edit')->name('minas.edit');

//Rocas
Route::get('rocas', 'RocaController@index')->name('rocas.index');
Route::get('rocas/form', 'RocaController@create')->name('rocas.create');
Route::post('rocas/form', 'RocaController@store')->name('rocas.store');

Route::get('rocas/{idRoca}', 'RocaController@edit')->name('rocas.edit');
Route::put('rocas/{roca}', 'RocaController@update')->name('rocas.update');
Route::delete('rocas/{idRoca}', 'RocaController@destroy')->name('rocas.destroy');

//Explosivos
Route::get('explosivos', 'ExplosivoController@index')->name('explosivos.index')->middleware('auth');;
Route::get('explosivos/form', 'ExplosivoController@create')->name('explosivos.create');
Route::post('explosivos/form', 'ExplosivoController@store')->name('explosivos.store');

Route::get('explosivos/{idExplosivo}', 'ExplosivoController@edit')->name('explosivos.edit');
Route::put('explosivos/{explosivo}', 'ExplosivoController@update')->name('explosivos.update');
Route::delete('explosivos/{idExplosivo}', 'ExplosivoController@destroy')->name('explosivos.destroy');

//PuntoMonitoreos
Route::get('puntosmonitoreos', 'PuntoMonitoreoController@index')->name('puntosmonitoreos.index');
Route::get('puntosmonitoreos/form', 'PuntoMonitoreoController@create')->name('puntosmonitoreos.create');
Route::post('puntosmonitoreos/form', 'PuntoMonitoreoController@store')->name('puntosmonitoreos.store');

Route::get('puntosmonitoreos/{idPuntoMonitoreo}', 'PuntoMonitoreoController@edit')->name('puntosmonitoreos.edit');
Route::put('puntosmonitoreos/{puntomonitoreo}', 'PuntoMonitoreoController@update')->name('puntosmonitoreos.update');
Route::delete('puntosmonitoreos/{idPuntoMonitoreo}', 'PuntoMonitoreoController@destroy')->name('puntosmonitoreos.destroy');


//Monitoreos
Route::get('monitoreos', 'MonitoreoController@index')->name('monitoreos.index');
Route::get('monitoreos/form', 'MonitoreoController@create')->name('monitoreos.create');
Route::post('monitoreos/form', 'MonitoreoController@store')->name('monitoreos.store');

Route::get('monitoreos/{idMonitoreo}', 'MonitoreoController@edit')->name('monitoreos.edit');
Route::put('monitoreos/{monitoreo}', 'MonitoreoController@update')->name('monitoreos.update');
Route::delete('monitoreos/{idMonitoreo}', 'MonitoreoController@destroy')->name('monitoreos.destroy');



//usuarios
Route::get('usuarios', 'UsuarioController@index')->name('usuarios.index');
Route::post('addUsuario', 'UsuarioController@addUsuario');

 /** })->middleware('auth', 'rol:admin');*/



//Route::redirect('home', 'HomeController@index')->name('home');

   /* Route::post('minas/store','MinaController@store')->name('minas.store');

    //Route::get('minas','MinaController@index')->name('minas.index');

    Route::get('minas/create','MinaController@create')->name('minas.create');

    Route::put('minas/{mina}','MinaController@update')->name('minas.update');

    Route::get('minas/{mina}','MinaController@show')->name('minas.show');

    Route::delete('minas/{mina}','MinaController@destroy')->name('minas.destroy');

    Route::get('minas/{mina}/edit','MinaController@edit')->name('minas.edit');*/

