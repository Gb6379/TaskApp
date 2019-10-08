<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){

    Route::get('/tasks', 'TaskController@index')->name('task');
    Route::get('/tasks/new', 'TaskController@create')->name('task.create');
    Route::get('/tasks/{id}/edit', 'TaskController@edit')->name('task.edit');
    Route::post('/tasks/new', 'TaskController@store')->name('task.store');
    Route::put('/tasks/{id}/update', 'TaskController@update')->name('task.update');
    Route::put('/tasks/{id}/completed', 'TaskController@completeTask')->name('task.status');//mark a task as completed
    Route::put('/tasks/{id}/uncompleted', 'TaskController@uncompleteTask')->name('task.statusu');//unmark it
    Route::delete('/tasks/{id}/delete', 'TaskController@destroy')->name('task.destroy');
    Route::get('/tasks/fileter', 'DateRangeController@index')->name('daterange');//daterange filter


});
