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

Route::group([
    'prefix' => 'todo'
], function () {

    Route::get('create', 'TodoController@createTodo')->name('todo.create');
    Route::post('store', 'TodoController@storeTodo')->name('todo.store');
    Route::get('my-todos', 'TodoController@myTodos')->name('todo.list');
    Route::get('show/{id}', 'TodoController@showTodo')->name('todo.show');
    Route::get('manage/{id}', 'TodoController@editTodo')->name('todo.edit');
    Route::post('update', 'TodoController@updateTodo')->name('todo.update');
    Route::get('destroy/{id}', 'TodoController@deleteTodo')->name('todo.destroy');
});

Route::group([
    'prefix' => 'todo'
], function () {

    Route::get('view/{id}', 'TodoController@activities')->name('activities.view');
   
  
});