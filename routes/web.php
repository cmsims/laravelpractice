<?php


use App\Todo;

use App\Http\Controllers\TodoController;
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

Route::get('/', 'TodoController@index');

Route::resource('todo', 'TodoController');

Route::model('todos', 'Todo');

Route::model('projects', 'Project');

//Route::get('/', 'TodoController@postTodos');
//
//Route::get('about', function () {
//    return View::make('pages.about');
//});
//
//Route::get('projects', function () {
//    return View::make('pages.projects');
//});

