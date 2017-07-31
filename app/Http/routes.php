<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foro','forocontroller@principal')->middleware('auth');
Route::get('/foro/res','forocontroller@res')->middleware('auth');
Route::get('/creartema','foroController@formulario');
Route::get('/crearrespuesta','foroController@formresp');
Route::get('/getlistatemas','forocontroller@getlistatemas');
Route::get('/getlistarespuestas','forocontroller@getlistarespuestas');
//registrar nuevo tema
Route::post('/foro/registrar','foroController@registrar');
//registrar nueva respuesta
Route::get('/foro/{id}/gettema','foroController@gettema');
Route::post('/foro/respuesta','foroController@respuesta');
//borrar
Route::delete('/foro/{id}/borrar','foroController@borrar');
//editar
Route::get('/foro/{id}/editar', 'foroController@editar');
Route::post('/foro/editando', 'foroController@editando');

Route::auth();
Route::get('/home','HomeController@index');