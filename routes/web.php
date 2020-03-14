<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Auth::routes();
///Route::redirect('/', 'blog');
//Route::get('blog', 'Web\PageController@blog')->name('blog');

//Route::redirect('/', 'minas');
// Auth::routes();
// //Route::get('minas', 'MinaController@index')->name('index');
// Route::redirect('/','login');


Route::get('/','InicioController@index')->name('inicio');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('seguridad/login', 'LoginController@index')->name('login');
Route::post('seguridad/login', 'LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'LoginController@logout')->name('logout');

/**Route::put('post/{id}', function ($id) {*/
//Minas
Route::middleware(['auth','superadmin'])->post('minas/form', 'MinaController@store')->name('minas.store');
Route::middleware(['auth','superadmin'])->get('minas', 'MinaController@index')->name('minas.index');
Route::middleware(['auth','superadmin'])->get('minas/form', 'MinaController@create')->name('minas.create');

Route::middleware(['auth','superadmin'])->put('minas/{mina}', 'MinaController@update')->name('minas.update');
Route::middleware(['auth','superadmin'])->delete('minas/{idMina}', 'MinaController@destroy')->name('minas.destroy');
Route::middleware(['auth','superadmin'])->get('minas/{idMina}', 'MinaController@edit')->name('minas.edit');

//Rocas
Route::middleware(['auth','superadmin'])->get('rocas', 'RocaController@index')->name('rocas.index');
Route::middleware(['auth','superadmin'])->get('rocas/form', 'RocaController@create')->name('rocas.create');
Route::middleware(['auth','superadmin'])->post('rocas/form', 'RocaController@store')->name('rocas.store');

Route::middleware(['auth','superadmin'])->get('rocas/{idRoca}', 'RocaController@edit')->name('rocas.edit');
Route::middleware(['auth','superadmin'])->put('rocas/{roca}', 'RocaController@update')->name('rocas.update');
Route::middleware(['auth','superadmin'])->delete('rocas/{idRoca}', 'RocaController@destroy')->name('rocas.destroy');

//Explosivos
Route::middleware(['auth','superadmin'])->get('explosivos', 'ExplosivoController@index')->name('explosivos.index')->middleware(['auth','superadmin']);;
Route::middleware(['auth','superadmin'])->get('explosivos/form', 'ExplosivoController@create')->name('explosivos.create');
Route::middleware(['auth','superadmin'])->post('explosivos/form', 'ExplosivoController@store')->name('explosivos.store');

Route::middleware(['auth','superadmin'])->get('explosivos/{idExplosivo}', 'ExplosivoController@edit')->name('explosivos.edit');
Route::middleware(['auth','superadmin'])->put('explosivos/{explosivo}', 'ExplosivoController@update')->name('explosivos.update');
Route::middleware(['auth','superadmin'])->delete('explosivos/{idExplosivo}', 'ExplosivoController@destroy')->name('explosivos.destroy');

//PuntoMonitoreos
Route::middleware(['auth','superadmin'])->get('puntosmonitoreos', 'PuntoMonitoreoController@index')->name('puntosmonitoreos.index');
Route::middleware(['auth','superadmin'])->get('puntosmonitoreos/form', 'PuntoMonitoreoController@create')->name('puntosmonitoreos.create');
Route::middleware(['auth','superadmin'])->post('puntosmonitoreos/form', 'PuntoMonitoreoController@store')->name('puntosmonitoreos.store');

Route::middleware(['auth','superadmin'])->get('puntosmonitoreos/{idPuntoMonitoreo}', 'PuntoMonitoreoController@edit')->name('puntosmonitoreos.edit');
Route::middleware(['auth','superadmin'])->put('puntosmonitoreos/{puntomonitoreo}', 'PuntoMonitoreoController@update')->name('puntosmonitoreos.update');
Route::middleware(['auth','superadmin'])->delete('puntosmonitoreos/{idPuntoMonitoreo}', 'PuntoMonitoreoController@destroy')->name('puntosmonitoreos.destroy');


//Monitoreos
Route::middleware(['auth','superadmin'])->get('monitoreos', 'MonitoreoController@index')->name('monitoreos.index');
Route::middleware(['auth','superadmin'])->get('monitoreos/form', 'MonitoreoController@create')->name('monitoreos.create');
Route::middleware(['auth','superadmin'])->post('monitoreos/form', 'MonitoreoController@store')->name('monitoreos.store');

Route::middleware(['auth','superadmin'])->get('monitoreos/{idMonitoreo}', 'MonitoreoController@edit')->name('monitoreos.edit');
Route::middleware(['auth','superadmin'])->put('monitoreos/{monitoreo}', 'MonitoreoController@update')->name('monitoreos.update');
Route::middleware(['auth','superadmin'])->delete('monitoreos/{idMonitoreo}', 'MonitoreoController@destroy')->name('monitoreos.destroy');



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

