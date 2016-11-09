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

//Rutas de tareas
Route::get('tasks','TaskController@index');
Route::get('tasks/create','TaskController@create');
Route::post('tasks','TaskController@store'); //Crear
Route::get('tasks/{task}/edit','TaskController@edit');
Route::put('tasks/{task}','TaskController@update'); //Editar
Route::get('tasks/{task}','TaskController@show');
Route::delete('tasks/{task}','TaskController@destroy'); //Eliminar

//Rutas de tareas
Route::get('projects','ProjectController@index');
Route::get('projects/create','ProjectController@create');
Route::post('projects','ProjectController@store'); //Crear
Route::get('projects/{project}/edit','ProjectController@edit')->where('project','[0-9]+');
Route::put('projects/{project}','ProjectController@update')->where('project','[0-9]+'); //Editar
Route::get('projects/{project}','ProjectController@show')->where('project','[0-9]+');
Route::delete('projects/{project}','ProjectController@destroy')->where('project','[0-9]+'); //Eliminar
